<?php
require_once 'lib/google-api-php-client/vendor/autoload.php';

// Get $id_token via HTTPS POST.
if(isset($_POST['idtoken']))
{
	$id_token = $_POST['idtoken'];
}

$client = new Google_Client();
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];

  $domain = "null";
  if(isset($payload['hd']))
    $domain = $payload['hd'];

  echo $userid.' '.$domain;
} else {
  return false;
}
?>
