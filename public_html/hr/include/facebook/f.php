<?php

require_once('oAuth.php');
require_once('facebook.php');

session_start();

$app_id = '406354782804315';
$app_secret = 'c2a4e1182be5387eb9e1c7208bb076ca';
$callback = 'http://www.hr.mysyachting.com/include/facebook/facebook.php'; // [DOMAIN]/auth/facebook.php in this example



$facebook = new Facebook($app_id, $app_secret, $callback);
if($facebook->validateAccessToken()){
        $response = $facebook->makeRequest('https://graph.facebook.com/me');
        print_r($response);
}

?>