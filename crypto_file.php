<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>  
    <link type="text/css" src="toast/toastr.min.css">
    <script type="text/javascript" src="toast/toastr.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
     <img src="cloud.png" width="40" height="40" class="d-inline-block align-top" alt="">
     Crypto Test Using AES
  </a>
  
  <form class="form-inline">
    <button style="margin-top: 10px; margin-right: 10px;" class="btn btn-sm btn-outline-light" type="button" onclick="GotoCryptoText()" > Crypto Text </button>
    <button style="margin-top: 10px; margin-right: 50px" class="btn btn-sm btn btn-outline-light" type="button" onclick="GotoCryptoFile()" >Crypto File</button>
    <button style="margin-top: 10px;" class="btn btn-sm btn btn-outline-light" type="button">Network Security Project</button>
  </form>
</nav>
 
 <div class="containers" style="margin-top:20px; margin-left: 50px; margin-right: 50px;">  
    <!-- Modaladd -->
    <div class="form-inline">
		<div id="myModal_Encrypt"  style="display:inline; padding-right: 100px" >
        <div style="width:550px">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <h4 class="modal-title">Encryption </h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">	
				<form  method="post" enctype="multipart/form-data" id="encryption_form">
					<input type="file" name="file" id="file">
					<br>
					<br>
					<p>Input Key</p>
                     <input name="key" id="key" class="form-control" style="width: 450px"></input>
                     <br />
               
					 <div id="pin_number" style="padding-bottom:20px">
						<p><strong>Press Encrypt Button to Detect PIN Number</strong></p>
                        <textarea name="pin" id="pin"  class="form-control" rows="1" cols="58">
                        </textarea>
					 </div>
					<button type="upload" class="btn btn-success" id="submit_enc" value="Upload" >Encrypt</button>
				</form>
				</div>
                <!-- footer modal 
                <button type="button" class="btn btn-success">Refresh</button>
				-->
            </div>
        </div>
    </div>
	
	<div id="myModal_Decrypt"  style="display:inline; " >
        <div style="width:550px">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <h4 class="modal-title">Decryption </h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">	
				<form  action="decrypt_file.php" method="post" enctype="multipart/form-data" id="encryption_form">
				    <div style="padding-top:25px"> </div>
					<p>Input PIN</p>
                    <input name="pin2" id="pin2" class="form-control" style="width: 450px"></input>
					<br>
					<br>
					<p >Input Key</p>
                     <input name="key2" id="key2" class="form-control" style="width: 450px; "></input>
                     <br />
                     <div style="padding-bottom:20px"></div>
					<button type="submit" class="btn btn-success" name="decrypt" value="Decrypt">Decrypt </button>
				</form>
				</div>
                <!-- footer modal 
                <button type="button" class="btn btn-success">Refresh</button>
				-->
            </div>
        </div>
    </div>
	</div>
	</div>
<script type="text/javascript">
//Encryption
$('#encryption_form').on("submit", function(event){  
  event.preventDefault();  
    $.ajax({  
      url:"encrypt_file.php",  
      method:"POST",  
      data: new FormData(this),
      processData: false,
      cache: false,
      contentType: false,
      success:function(data){  
        $('#pin').html(data);
      }  
    });
});
function GotoCryptoText() {
	window.location.href = "crypto_text.php";
}
function GotoCryptoFile() {
	window.location.href = "crypto_file.php";
}
//Decryption
</script>
</body>
</html>
