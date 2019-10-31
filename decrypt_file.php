
		<?php 
		
		$servername = "localhost";
		$database = "data_file";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password, $database);
		
		if(isset($_POST)== true){
			//$ekstensi_diperbolehkan	= array('png','jpg','docx', 'pdf', 'txt');
			$nama = $_FILES['file2']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file2']['size'];
			$file_tmp = $_FILES['file2']['tmp_name'];
			
			$open_file_for_read= fopen($file_tmp, "r") or die("Unable to open file!");
			$data_raw=fread($open_file_for_read,filesize($file_tmp));
			
			//encrypt
			define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

						function decrypt ($key, $garble) {
						  $combo = base64_decode($garble);
						  $iv = substr($combo, 0, IV_SIZE);
						  $crypt = substr($combo, IV_SIZE, strlen($combo));
						  $payload = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $crypt, MCRYPT_MODE_CBC, $iv);
						  return $payload;
						}

						$garble = $data_raw;
						$key = $_POST['key2'];
						while(strlen($key) < 16) 
						{
							$key .= "\0";
						}
						// ENCRYPTION
						$message =  decrypt($key, $garble);
						
						//echo  $cipher;   
						fclose($open_file_for_read);
						$open_file_for_write= fopen($file_tmp, "w+") or die("Unable to open file!");
						fwrite($open_file_for_write, $message);
						fclose($open_file_for_write);
						//if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
							    $pin= time();
								$file_tujuan = "file/".$pin; 
								move_uploaded_file($file_tmp, $file_tujuan);
								$query = mysqli_query($conn,"INSERT INTO file VALUES(NULL, '$pin')");
					if($query){
						echo 'FILE BERHASIL DI Decrypt';
						
					}else{
						echo 'GAGAL MENGUPLOAD FILE';
					}
			//}else{
				//echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			//}
		}
		?>
 
		