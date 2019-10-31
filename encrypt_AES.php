<?php 
define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

function encrypt ($key, $payload) {
  $iv = mcrypt_create_iv(IV_SIZE, MCRYPT_DEV_URANDOM);
  $crypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $payload, MCRYPT_MODE_CBC, $iv);
  $combo = $iv . $crypt;
  $garble = base64_encode($iv . $crypt);
  return $garble;
} 

$payload = $_POST['message'];
$key = $_POST['key'];
while(strlen($key) < 16) 
{
    $key .= "\0";
}
// ENCRYPTION
$cipher = encrypt($key, $payload);
echo $cipher;                                 
?>
