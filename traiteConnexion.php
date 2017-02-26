<?php
require_once 'google-api-php-client/vendor/autoload.php';

// Get $id_token via HTTPS POST.
if(isset($_POST['idtoken']))
{
	$id_token = $_POST['idtoken'];
}

$client = new Google_Client();
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  // If request specified a G Suite domain:
  $domain = $payload['hd'];

  echo $userid;
  echo '<br>'.$domain;
  echo '<br>'.$id_token;
} else {
  // Invalid ID token
}
?>