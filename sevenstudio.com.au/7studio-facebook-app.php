<?php
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

require 'fb_sdk_src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '379821782043946',
  'secret' => '3cbca6c038a97872dde9916112f65b82',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.
/*
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
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');
*/
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Welcome! Seven Studio Web Design South Sydney </title>
    <style>
	/* Seven Stuff Start */
	body {
	margin:0 auto;
	}
	#main-cont {
		width:100%;
		height:100%;
		margin-left:auto;
		margin-right:auto;
	}
	#img-cont {
		width:520px;
		height:521;
		margin-left:auto;
		margin-right:auto;
	}
	a {
		text-decoration:none;
	}
	/* Seven Stuff End */	
    </style>
  </head>
  <body>
	<div id="main-cont">
		<div id="img-cont">
			<a href="http://www.sevenstudio.com.au" target="_blank" title="Check out our website www.sevenstudio.com.au">
				<img src="http://www.sevenstudio.com.au/images/seven-studio-FaceBook-app.gif" border="0" alt="Seven Studio Web Design South Sydney Penshurst"/>
			</a>
		</div>
	</div>
  </body>
</html>