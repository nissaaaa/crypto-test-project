
		<?php 
			define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
			function decrypt ($key, $ciphertext) {
			  $combo = base64_decode($ciphertext);
			  $iv = substr($combo, 0, IV_SIZE);
			  $crypt = substr($combo, IV_SIZE, strlen($combo));
			  $payload = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $crypt, MCRYPT_MODE_CBC, $iv);
			  return $payload;
			}

			$garble = $_POST['pin2'];
			$key = $_POST['key2'];
			 while(strlen($key) < 16) 
				{
					$key .= "\0";
				}
				
				$file = "file/".$garble;
				if ($file != null){
					$open_file_for_read= fopen($file, "r") or die("Unable to open file!");
					$data_raw=fread($open_file_for_read,filesize($file));
					$str = $data_raw;
					$exp = (explode(".",$str));
					
					$ciphertext= $exp[2];
					$nama_file=$exp[0].".".$exp[1];
					$file_tujuan = "file/".$nama_file; 
					//echo $file_tujuan;
					// DECRYPTION
					$end_result = decrypt($key, $ciphertext);
					fclose($open_file_for_read);
					$open_file_for_write= fopen($file, "w+") or die("Unable to open file!");
					$plaintext = $end_result;
					fwrite($open_file_for_write, $plaintext);
					fclose($open_file_for_write);
				} 
				rename($file, $file_tujuan);
				if (file_exists($file_tujuan)) {	
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename='.basename($file_tujuan));
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: private');
					header('Pragma: private');
					header('Content-Length: ' . filesize($file_tujuan));
					ob_clean();
					flush();
					readfile($file_tujuan);
					exit;
	   
				}
			
			
			
		?>
		
		
		
 
		
