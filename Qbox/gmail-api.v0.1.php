<?php
function get_json_error()
{
	$json_errors = array(
    JSON_ERROR_NONE => 'No error has occurred',
    JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded',
    JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
    JSON_ERROR_SYNTAX => 'Syntax error',
	);

}

function toArray($data) {
    if (is_object($data)) $data = get_object_vars($data);
    return is_array($data) ? array_map(__FUNCTION__, $data) : $data;
}

function getParamFromURL($url, $param)
{
	$u = parse_url($url);
	parse_str($u['query'],$q);
	return $q[$param];
}

function toString($array, $glue="=", $separator="; ") {
    if ( ! is_array( $array ) ) return $array;
    $string = array();
    foreach ( $array as $key => $val ) {
        if ( is_array( $val ) )
            $val = implode( ',', $val );
        $string[] = "{$key}{$glue}{$val}";
        
    }
    return implode( $separator, $string );
    
}

function parseResponse($content)
{
	//echo $content;
	$headers = explode("\r\n\r\n", $content);
	$body = array_pop($headers);
	$header = $headers[sizeof($headers)-1];
	$cookie = array();
	$strCookie = '';

	foreach($headers as $hdr)
	{
		preg_match_all('/^Set-Cookie: (.*?);/m', $hdr, $setCookie);
		$strc = join($setCookie[1],';');
		$c = str_replace(";",'&',trim($strc,';'));
		parse_str($c, $tmp);
		foreach($tmp as $key=>$val)
			$cookie[$key] = $val;
	}
	
	//$strCookie = toString($cookie);
	$strCookie = join(';',$cookie);
	return array('cookie'=>$cookie,'body'=>$body,'header'=>$header,'strCookie'=>$strCookie);
}

function parseGoogleJson($g)
{
	//echo $g;
	if($t = strpos($g,"while(1);")<3)
	$g = trim(substr($g,$t+strlen("while(1);")+1));
	while(strstr($g,",,"))
		$g = str_replace(",,",",0,",$g);

	$tmp = preg_split("/([0-9]+[\r\n]+)/",$g,-1,PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
	$result = array();
	$c = 0;

	for($i=0;$i<sizeof($tmp);$i=$i+2)
	{
		$code = trim($tmp[$i]);
		$data = json_decode($tmp[$i+1]);
		echo $code."\n";
		//print_r($data);

		if($data[0][0]=="v")
		{
			$result['labels'] = array();
			for($t = 1;$t<sizeof($data[9]);$t++)
			{
				$labels = $data[9][$t];
				foreach($labels as $label)
					$result['labels'][] = array('name'=>$label[0],'total'=>$label[2],'desc'=>(isset($label[13])?$label[13]:''));
			}
			
			$result['lastAccessed']['time'] = $data[3][1];
			$result['lastAccessed']['ip'] = $data[3][3];
			$result['googleProfileName'] = $data[6][1];
		}
		else if($data[0][0]=="tb")
		{
			foreach($data[0][2] as $res)
			{
				$result['searchResults'][$c]['id'] = $res[0];
				$result['searchResults'][$c]['labels'] = $res[5];
				$result['searchResults'][$c]['title'] = str_replace(array('</b>','<b>'),'',$res[9]);
				$result['searchResults'][$c]['fileName'] = $res[13];
				$result['searchResults'][$c]['dateTime'] = $res[15];
				$result['searchResults'][$c]['date'] = str_replace(array('</b>','<b>'),'',$res[14]);
				
				$t1 = str_replace('<span dir="ltr">','',$res[7]);
				$t2 = explode('<span',$t1);
				$senders = array();
				foreach($t2 as $sender)
				{
					$t3 = str_replace(array('"',"'"),'',$sender);
					$t4 = str_replace(array('</span>',' ','>'),array('',"&",'&name='),trim($t3,' ,'));
					parse_str($t4,$t5);
					if(isset($t5['name']) and isset($t5['email']))
					$senders[] = array('name'=>$t5['name'],'email'=>$t5['email']);
				}
				$result['searchResults'][$c]['senders'] = $senders;
				$c++;
			}
		}
		else if($data[0][0]=="qu" and $data[2][0]=="ti")
			$result['query'] = $data[2][5];
		else if($data[0][0]=="ti")
			$result['query'] = $data[0][2];
		else if(!$data[0][0]=="te" || $data[0][0]=="lr")
		{
			echo 'ERR:'.$code."\n";
			print_r($data);
			echo get_json_error();
		}
	}
	
	return $result;
}

class gmail
{
	var $username, $password, $curl, $cookieFile, $cookie;
	
	function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
		$this->cookieFile = tempnam(sys_get_temp_dir(), 'cookie');
		$this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_HEADER, true);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0");
        curl_setopt($this->curl, CURLOPT_COOKIEFILE, $this->cookieFile);
        curl_setopt($this->curl, CURLOPT_COOKIEJAR, $this->cookieFile);
        register_shutdown_function(array(&$this, '__destructor'));
	}
	
	function __destructor()
	{
		@curl_close($this->curl);
		@unlink($this->cookieFile);
	}

	function connect()
	{
/*		print_r($_SESSION);
		if (isset($_SESSION['cookie']))
		{
			$this->cookie = $_SESSION['cookie'];
       		return true;
		}*/
	   
		curl_setopt($this->curl, CURLOPT_POST, false);
		curl_setopt($this->curl, CURLOPT_URL, 'http://www.google.com/accounts/ServiceLoginBoxAuth');
		$response = parseResponse(curl_exec($this->curl));
		$content = $response['body'];
		$this->cookie = $response['strCookie'];

		preg_match_all("#<input type=\"hidden\"[^>](.*?)>#", str_replace("\n"," ",$content), &$out);
		$params = array();

		foreach($out[1] as $ele)
		{
			$t = str_replace(array('"',"'",' '),array('','','&'),$ele);
			parse_str($t,$tmp);
			if(array_key_exists('name',$tmp))
				$params[] = $tmp['name'].'='.$tmp['value'];
		}

		$params[] = 'Email=' . urlencode($this->username);
		$params[] = 'Passwd=' . urlencode($this->password);
		$params[] = 'PersistentCookie=yes';
		curl_setopt($this->curl, CURLOPT_POST, true);
		curl_setopt($this->curl, CURLOPT_URL, "https://www.google.com/accounts/ServiceLoginBoxAuth");
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, join('&', $params));
		$response = parseResponse(curl_exec($this->curl));
		$this->cookie = $response['strCookie'];

		/*$content = $response['body'];
		preg_match("/<a href=\"([^\"]+)\"[^>]*>click here to continue<\/a>/", $content, $match);
		$next_url = $match[1];
		$next_url = str_replace('&amp;', '&', $next_url);*/
		$next_url = 'https://www.google.com/accounts/CheckCookie?service=mail&chtml=LoginDoneHtml';
		curl_setopt($this->curl, CURLOPT_COOKIE, $this->cookie);
		curl_setopt($this->curl, CURLOPT_POST, false);
		curl_setopt($this->curl, CURLOPT_URL, $next_url);
		$response = parseResponse(curl_exec($this->curl));
		$this->cookie = $response['strCookie'];
		
		curl_setopt($this->curl, CURLOPT_COOKIE, $this->cookie);
		curl_setopt($this->curl, CURLOPT_URL, 'https://mail.google.com/mail/?shva=1');
		//curl_setopt($this->curl, CURLOPT_NOBODY, true);
		$response = parseResponse(curl_exec($this->curl));
		//print_r($response);
		$this->cookie = $response['strCookie'];
		
		//$_SESSION['cookie'] = toString($response['cookie']).';';
		return true;
	}

	function getAttachment($mailId,$attId)
	{
		$url = 'https://mail.google.com/mail/?view=att&th='.$id.'&attid=0.'.$attId;
		header('Location: '.$url);
	}
	
	function getEmail($from='', $to='', $subject='', $start='0', $num='25', $include_words='', $exclude_words='', $att='false', $label='all', $days='')
	{
		curl_setopt($this->curl, CURLOPT_COOKIE, $this->cookie);
		$url = 'https://mail.google.com/mail/?ik=80927b060d&view=tl&rt=c&search=adv&start='.$start.'&num='.$num.'&as_from='.$from.'&as_to='.$to.'&as_subj='.$subject.'&as_has='.$include_words.'&as_hasnot='.$exclude_words.'&as_attach='.$att.'&as_subset='.$label.'&as_within='.$days;
		
		curl_setopt($this->curl, CURLOPT_URL, $url);
		curl_setopt($this->curl, CURLOPT_POST, false);
		$response = parseResponse(curl_exec($this->curl));
		print_r(toString($response['cookie']));
		return $response['body'];
	}

	function getUnreadEmail()
	{
		$url = 'https://gmail.google.com/gmail/feed/atom';
		$headers = array("Host: gmail.google.com","Authorization: Basic ".base64_encode($this->username.':'.$this->password));
		curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
		$str = curl_exec($this->curl);
		$feed = simplexml_load_string($str);
		$results = array();
	
		foreach($feed->entry as $key=>$value)
			$results[] = toArray($value);
		
		return $results;
	}
}
session_start();
//session_destroy();
$username = "behramcelen";
$password = "@123698745";
$x = new gmail($username,$password);

if($x->connect())
{
	$j = $x->getEmail();
	print_r(parseGoogleJson($j));
}
?>