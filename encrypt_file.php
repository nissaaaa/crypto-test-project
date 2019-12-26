<?php 
$ekstensi_diperbolehkan	= array('png','jpg','docx', 'pdf', 'txt');
$nama = $_FILES['file']['name'];
$nama_for_embed = strtolower($nama);
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$open_file_for_read= fopen($file_tmp, "r") or die("Unable to open file!");
$data_raw=fread($open_file_for_read,filesize($file_tmp));
//encrypt
define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
function encrypt ($key, $payload) {
  $iv = mcrypt_create_iv(IV_SIZE, MCRYPT_DEV_URANDOM);
  $crypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $payload, MCRYPT_MODE_CBC, $iv);
  $combo = $iv . $crypt;
  $garble = base64_encode($iv . $crypt);
  return $garble;
} 
$payload = $data_raw;
$key = $_POST['key'];
while(strlen($key) < 16) 
{
	$key .= "\0";
}
// ENCRYPTION
$cipher = encrypt($key, $payload);
//echo  $cipher;   
fclose($open_file_for_read);
$open_file_for_write= fopen($file_tmp, "w+") or die("Unable to open file!");
$cipher = $nama_for_embed.".".$cipher;
fwrite($open_file_for_write, $cipher);
fclose($open_file_for_write);
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	    $pin= time();
		$file_tujuan = "file/".$pin; 
		move_uploaded_file($file_tmp, $file_tujuan);
		echo $pin;
		
}else{
	echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
?>
