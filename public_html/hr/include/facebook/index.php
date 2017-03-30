<?php

require 'src/facebook.php';

$facebook = new Facebook(array(
    'appId'  => '406354782804315',
    'secret' => 'c2a4e1182be5387eb9e1c7208bb076ca',
));
/*
$user = $facebook->getUser();

if ($user) {
    try {
        $user_profile = $facebook->api('/me');
    } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
    }
}

if ($user) {
    $logoutUrl = $facebook->getLogoutUrl();
} else {
    $loginUrl = $facebook->getLoginUrl();
}*/

$larry = $facebook->api('/mys.croatia');
print_r($larry);
?>