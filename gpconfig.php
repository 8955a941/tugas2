<?php
session_start();
// Include Librari Google Client (API)
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '372932612003-6kjvo4to7jil26ciiioovkbv093rqlb3.apps.googleusercontent.com'; // Google client ID penting!! ambil dari googlenya
$client_secret = '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'; // Google client ID penting!! ambil dari googlenya
$redirect_url = 'http://localhost/Tugas2/google.php'; // Callback URL
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set Nama Aplikasi
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>