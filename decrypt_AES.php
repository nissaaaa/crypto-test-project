<?php
define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

function decrypt ($key, $garble) {
  $combo = base64_decode($garble);
  $iv = substr($combo, 0, IV_SIZE);
  $crypt = substr($combo, IV_SIZE, strlen($combo));
  $payload = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $crypt, MCRYPT_MODE_CBC, $iv);
  return $payload;
}

$garble = $_POST['cipher_text2'];
$key = $_POST['key'];
while(strlen($key) < 16) 
{
  $key .= "\0";
}
// DECRYPTION
$end_result = decrypt($key, $garble);
echo "<strong>","Plaintext: ", $end_result, "</strong>","<br></br>";
?>