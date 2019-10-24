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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
     <img src="cloud-data-512.png" width="40" height="40" class="d-inline-block align-top" alt="">
     Crypto Test Using AES
  </a>
  
  <form class="form-inline">
    <button style="margin-top: 10px; margin-right: 10px;" class="btn btn-sm btn-outline-light" type="button" onclick="GotoCryptoText()" > Crypto Text </button>
    <button style="margin-top: 10px; margin-right: 50px" class="btn btn-sm btn btn-outline-light" type="button" onclick="GotoCryptoFile()" >Crypto File</button>
    <button style="margin-top: 10px;" class="btn btn-sm btn btn-outline-light" type="button">Network Security Project</button>
  </form>
</nav>

   <div class="containers" style="margin-top:20px; margin-left: 100px; margin-right: 100px;">  
    <!-- Modaladd -->
    <div class="form-inline">
    <div id="myModal_Encrypt"  style="display:inline; padding-right: 100px" >
        <div style="width:500px">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <h4 class="modal-title">Encryption </h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select file <strong> .pdf .doc .jpeg </strong> to encrypt:
                    <br />
                <input type="file" name="fileToUpload" id="fileToUpload">
                 <br />
                 <br />
                <p>Input Key</p>
                     <input name="key" id="key" class="form-control" style="width: 450px"></input>
                     <br />
                     <br />
     <div id="button_encrypt" style="padding-left: 80px">
                     <button type="button" class="btn btn-success" style="width:300px;">Encrypt</button>
                     </div>
</form>

                </div>
                <!-- footer modal -->
                
                <button type="button" class="btn btn-success">Refresh</button>
          
            </div>
        </div>
    </div>

    <div id="myModal_Decrypt"  style="display:inline; " >
        <div style="width:500px">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <h4 class="modal-title">Decryption </h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <form method="post" id="insert_form">     
                     <p>Input Chiper Text</p>
                     <input type="text" name="plain_text" id="plain_text" class="form-control" style="height:150px; width: 450px" />
                     <br />
                     <br />
                     <p>Input Key</p>
                     <input name="key" id="key" class="form-control" style="width: 450px"></input>
                     <br />
                     <br />
                     <div id="button_encrypt" style="padding-left: 80px">
                     <button type="button" class="btn btn-success" style="width:300px;">Decrypt</button>
                     </div>
                     <br />
                     <div id="chipper_text">
                      <p><strong>Plain Text:</strong></p>
                    </div>
                </form>

                </div>
                <!-- footer modal -->
                
                <button type="button" class="btn btn-success">Refresh</button>
          
            </div>
        </div>
    </div>

 

 <!--<div id="tabel_mahasiswa" class="table table-responsive{-sm|-md|-lg|-xl}"  style="margin-top: 0;">
    <table id="tabel" class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Action</th>
        </tr>
       </thead>
    <tbody></tbody>
    </table>
    </div>
   </div>
 -->

<!-- fungsi insert-->
    <script type="text/javascript">
      
        
        $('#table').on( 'keyup', function () {
            table.search( this.value ).draw();
        } );


        $('#insert_form').on("submit", function(event){  
        event.preventDefault();  
        if($('#name').val() == "")  
        {  
           //$('.toast').toast('show', {delay:1000});
             error();
        }  
        else if($('#email').val() == '')  
        {  
           error();
        }  
        else if($('#handphone').val() == '')
        {  
           error();
        }

        else  
        {  
         $.ajax({  
          url:"insert.php",  
          method:"POST",  
          data:$('#insert_form').serialize(),
          beforeSend:function(){  
          $("#insert").attr("disabled", true);
          },    
          success:function(data){  
            success();
           $("#insert").attr("disabled", false);
           $('#insert_form')[0].reset();  
           $('#myModal').modal('hide');  
           loadData();
          }  
         });
      }
  });

//Menampilkan Tampilan
$(document).ready(function(){
   loadData();
  });

    $('#insert_form2').on("submit", function(event){  
    event.preventDefault();  
    if($('#name2').val() == "")  
    {  
      error();
    }  
    else if($('#email2').val() == '')  
    {  
     error(); 
    }  
    else if($('#handphone2').val() == '')
    {  
    error();
    }
  else  
  {  
  $.ajax({  
          url:"update.php",  
          method:"POST",
          data:$('#insert_form2').serialize(),
          beforeSend:function(){  
          $("#insert2").attr("disabled", true);
          },    
          success:function(data){  
            console.log("ok");
            console.log(data);
            successUpdate();
            $("#insert2").attr("disabled", false);
            $('#insert_form2')[0].reset();  
            $('#myModalEdit').modal('hide'); 
            loadData(); 
      }  
    });
  }
});


 function prepareUpdate(id){ 
           $.ajax({  
                url:"select.php",
                method:"POST",
                data: {"joko":id},  
                success:function(data){  
                  console.log("ok");
                  console.log(id);
                  var objResponse = JSON.parse(data);
                  console.log(objResponse.data[0]);
                  var obj=objResponse.data[0];
                  $('#id').val(obj.id);
                  $('#name2').val(obj.name);
                  $('#email2').val(obj.email);
                  $('#hape2').val(obj.handphone);
                  $('#myModalEdit').modal('show');
                }  
           });  

      }


    $('#delete_form').on("submit", function(event){  
       event.preventDefault();  
           $.ajax({  
            url:"update_flag.php",  
            method:"POST",
            data:$('#delete_form').serialize(),  
            beforeSend:function(){
             $("#delete").attr("disabled", true);   
            },
            success:function(data){  
            console.log("ok");
            console.log(data);
            successDelete();
             $("#delete").attr("disabled", false);
            $('#insert_form2')[0].reset();  
            $('#myModalDelete').modal('hide'); 
            loadData(); 
            } 
         
    });
    
  });


  //fungsi delete
   function prepareUpdateFlag(id){ 
           $.ajax({  
                url:"select.php",
                method:"POST",
                data: {"joko":id},  
                success:function(data){  
                  console.log("ok");
                  console.log(flag);
                  var objResponse = JSON.parse(data);
                  console.log(objResponse.data[0]);
                  var obj=objResponse.data[0];
                  $('#idupdate').val(obj.id);
                  $('#flag').val(-1);
                  $('#myModalDelete').modal('show');
                }  
           });  

  }


          function error (){

              Swal.fire({
              type: 'error',
              title: 'Error',
              text: 'Isi semua data',
              })
          }

          function success(){
              Swal.fire(
             'Berhasil',
             'Data anda telah berhasil ditambahkan',
             'success'
        )
        }

         function successUpdate(){
          Swal.fire(
        'Berhasil',
        'Data anda telah berhasil diperbarui',
        'success'
      )
      }

        function successDelete(){
          Swal.fire(
        'Berhasil',
        'Data anda telah berhasil dihapus',
        'success'
      )}



  function loadData(){
 $.ajax({
     url:"fetch.php",
     method:"POST",
     success:function(data){
        var objResponse = JSON.parse(data);
        console.log(objResponse.data);
        for (objData of objResponse.data ){
                objData.action = '';
                objData.action += '<button class=\'btn btn-sm btn-light\' onClick="prepareUpdate(\'' + objData.id + '\')"><i class=\'fa fa-edit\' aria-hidden=\'true\' ></i> Update</button>';
                objData.action += '<button class=\'btn btn-sm btn-warning\' data-toggle=\'modal\' data-target=\'#mdl_update_flag\' onClick="prepareUpdateFlag(\'' + objData.id + '\')"><i class=\'fa fa-trash\' aria-hidden=\'true\'></i> Delete</button>';
            }
        $("#tabel").dataTable({
                destroy:true,
                responsive:true,                
                data: objResponse.data,
                searching:true,
                dom: 'rftip',

                columns: [
                    { data: 'id' },
                    { data: 'name', responsivePriority: 2},
                    { data: 'email' },
                    { data: 'handphone' },
                    { data: 'action', responsivePriority: 1}
                ]                    
            });    
    }
    });


  }

</script>




</body>
</html>

