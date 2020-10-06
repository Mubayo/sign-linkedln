<?php

use myPHPNotes\LinkedIn;

require_once "LinkedIn.php";

$app_id = "78w1czwayv6fyk";
$app_secret = "5Wqnn0wQZTMkq7Pr";
$callback = "http://localhost/sign-linkedln/callback.php";
$scopes = "r_liteprofile r_emailaddress";
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);
?>