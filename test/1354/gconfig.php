<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('599331226807-88oo9li5elqin3n88nad0jsl10jd1611.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('AIzaSyCEWo_J9UKW9qlMQdsCOco6UN9WQ7UAYwk');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://alphawizz.com/Freelance/test/1354/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>