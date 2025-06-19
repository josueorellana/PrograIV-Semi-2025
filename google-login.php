<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('GOOGLE_OAUTH_CLIENT_ID');
$client->setClientSecret('GOOGLE_OAUTH_CLIENT_SECRET');
$client->setRedirectUri('http://localhost/Engine-Team/registro.php');
$client->addScope('email');
$client->addScope('profile');

$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit;