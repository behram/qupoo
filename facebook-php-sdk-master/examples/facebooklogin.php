<?php

require_once("db.php");
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '629051703785720',
  'secret' => '87e41135918c7d4dda5975a457180dab',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
$params = array(
  'scope' => 'read_mailbox,manage_notifications'
);

$loginUrl = $facebook->getLoginUrl($params);
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');



if($user){

$uid=$_COOKIE['uid'];
$fcode=$_SESSION['fb_629051703785720_code'];
$ftoken=$_SESSION['fb_629051703785720_access_token'];
$fuid=$_SESSION['fb_629051703785720_user_id'];

mysql_query("INSERT INTO  `qupoo_db`.`qbox_facebook` (`uid` ,`utoken` ,`faceuid` ,`face_code`)
VALUES (																							'$uid',  '$ftoken',  '$fuid',  '$fcode'		);	");



header("Location : http://qupoo.com/logged.php?from=facebook");



}else{


header('Location: '.$loginUrl.'');



}




?>



