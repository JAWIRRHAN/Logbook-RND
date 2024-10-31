<?php



include "header.php";



?>        







<style>
     table {
      border-collapse: collapse;
      border: 0px solid black;
      
    }
    .table th {
      padding: 2px;
      
      border-collapse: collapse;
    }
    .table td {
      word-wrap:break-word;
      
      border-collapse: collapse;
      width: 0%;
      padding: 2px;
    }

    h1{


      color: white;
    }
  </style>





<br><br>














<div class="container modal-lg p-2 bg-primary text-white" style="width:60%; margin-left: 27%">


<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="img/iu.png" width="100px"></td>
    <td class="text-white" width="60%"><center><h1><b>FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
</div>


<?php

include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from users where user_name='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>


<form action="" method="post">

<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
  <table class="table" border="1" width="100%">

                <tr>
                    <!-- <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td> -->
                    <td rowspan="2"><center><h3><b>FORM EDIT USER<br>R&D DEPARTEMENT</b></h3></center></td>
                    <!-- <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.057-00</b></td> -->
                </tr>   

                
                <tr>
                    <!-- <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $data['no_form']; ?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td> -->
                </tr>    
                 
                    
                    

  </table>
                
  <br>

  <table border="1" width="100%">
    
    <input type="hidden" class="form-control"  name="no_form"  value="<?php echo $data?>" required> 
    
    <tr>
        <td class="bg-light" style="width: 30%"> Full Name </td>
        <td> <input type="text" class="form-control"  name="name" value="<?php echo $data['name']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Username </td>
        <td> <input type="text" class="form-control" name="user_name" value="<?php echo $data['user_name']; ?>" required> </td>
    </tr>
    <tr>
    <div class="input-group">
        <td class="bg-light" width="30%"> Password </td>
        <td> <span class="input-group-btn">
            <input type="text" class="form-control" name="password" id="password" value="<?php echo $data['password']; ?>" readonly required> 
		<!-- <button class="btn btn-default" type="button" id="see_pass"><i class="fa fa-eye"></i></button> -->
	</span>
        </td> 
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Level </td>
        <td> <input type="text" class="form-control" name="level" value="<?php echo $data['level'];?>" required> </td>
    </tr>
    </div>
    </table>
    <br>

    
  








  <div width=15% class="text-left">
                    <a href="data_user.php"><button type="button" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Back</button></a>
                    <button type="submit" class="btn btn-primary" name="proses"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button></br></br>
                    </div>
                    </div>
  
  <div class="container p-5 ">

  </div>




<script>
 $( "#see_pass" ).click(function() {
    var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
  });
</script>

</form> 



















                      
<?php
                /* digunakan update data */
                include "koneksi.php";

                if(isset($_POST['proses'])){
                    mysqli_query($koneksi,"update users set
                            name = '$_POST[name]',
                            level = '$_POST[level]',
                            password = '$_POST[password]'
                            where user_name = '$_GET[kode]'");


                    echo "<script>alert('Data baru telah dirubah');window.location='data_user.php';</script>";
                    // echo "Data baru telah diubah";
                    // echo "<meta http-equiv=refresh content=1;URL='dashboard.php>'";
                
                }
                ?>







