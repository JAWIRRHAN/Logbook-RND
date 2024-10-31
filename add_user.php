<?php



include "header.php";


?>
                 
 
 
          
                 <br><br>             
 
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
 
                 
 
 
 
 
 
 
 <?php
    error_reporting(0);
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM peminjaman WHERE no_form like '%RN%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "RN-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "RN-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "RN-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "RN-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "RN-".$bln."-".$thn."-".$tambah;
         }
     };
    //}

    
?>

<?php

include 'koneksi.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($koneksi, $_POST['name']);
   $uname = mysqli_real_escape_string($koneksi, $_POST['user_name']);
   $level = mysqli_real_escape_string($koneksi, $_POST['level']);
   $pass = mysqli_real_escape_string($koneksi, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($koneksi, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($koneksi, "INSERT INTO `users`(name, user_name, password, level) VALUES('$name', '$uname', '$pass', '$level')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:dashboard.php');
         }else{
            $message[] = 'registeration failed!';
            header('location:dashboard.php');
         }
      }
   }

}

?>
<br><br>



<body>












<div class="container modal-lg p-2 bg-primary text-white" style="width:60%; margin-left: 27%">


<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="img/iu.png" width="100px"></td>
    <td class="text-white" width="60%"><center><h1><b>FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
  
</div>



<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
  <table class="table" border="1" width="100%">

                <tr>
                    <!-- <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td> -->
                    <td rowspan="2"><center><h3><b>FORM ADD USER<br>R&D DEPARTEMENT</b></h3></center></td>
                    <!-- <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.057-00</b></td> -->
                </tr>   

                
                <tr>
                    <!-- <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $format?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td> -->
                </tr>    
                 
                    
                    

  </table>
                
  <br>
  <form action="" method="post" enctype="multipart/form-data">
  <table border="1" width="100%">
    
    <input type="hidden" class="form-control"  name="no_form"  value="<?php echo $format?>" readonly>
    <?php
      if(isset($message)){
        echo "<script>alert('Data baru user telah disimpan');window.location='data_user.php';</script>";
         }
      
      ?>
    
    <tr>
        <td class="bg-light" style="width: 30%"> Full Name </td>
        <td>
               <input type="text" 
                      class="form-control"
                      name="name" 
                      placeholder="Name" required>

           </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Username </td>
        <td>
               <input type="text" 
                      name="user_name" 
                      class="form-control"
                      placeholder="User Name" required>
        </td>
    </tr>
    <tr>
    <div class="login-box">
        <td class="bg-light" width="30%"> Password </td>
        <td><input type="password" 
                 name="password" 
                 class="form-control"
                 placeholder="Password" required> </td>
                 </div>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Confirm Password  </td>
        <td>  <input type="password" 
                 name="cpassword" 
                 class="form-control"
                 placeholder="Confirm Password" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Level  </td>
        <td> <select class="form-control" name="level" required>
            <option>Pilih Level</option>
        <option>user</option>
        <option>admin</option>
        </select> </td>
    </tr>
    
    <!-- <tr>
        <td class="bg-light" width="30%"> Profile Picture  </td>
        <td>  <input type="file" 
                 name="image" 
                 accept="image/jpg, image/jpeg, image/png"
                 class="form-control"
                 placeholder="Picture"> </td>
    </tr> -->
    </table>
   
            
         
  
  
    <div class="modal-footer">
    <input type="submit" name="submit" value="Add User" class="btn btn-success">
                </div>
  </div>
  
  <div class="container p-5 ">

  </div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
           
        <!-- page script -->
    

    </body>
</html>










</form>

</body>
<script src="script.js"></>
</html>