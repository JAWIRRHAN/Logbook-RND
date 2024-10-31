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
  </style>


<br><br>

<div class="container modal-lg p-2 bg-primary text-white" style="width:60%; margin-left: 27%">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="-10%"><img src="img/iu.png" width="100px"></td>
    <td class="text-white" width="60%"><center><h1><b style="color: white">FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
  
</div>


<?php

include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from form_list where no_form='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<form action="" method="post">

<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
  <table class="table" border="1" width="100%">
<div class="container p-2  text-white">


                <tr>
                    <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td>
                    <td rowspan="2"><center><h3><b>LIST DATA<br>RETAIN</b></h3></center></td>
                    <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.019-01</b></td>
                </tr>   

                
                <tr>
                    <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $data['no_form'];?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td>
                </tr>    
                 
                    
                    

  </table>
                
  <br>

  <table border="1" width="100%">
    
  <input type="hidden" class="form-control"  name="no_form"  value="<?php echo $format?>" readonly required> 
    
    <tr>
        <td class="bg-light" style="width: 30%">Kode</td>
        <td> <input type="text" class="form-control"  name="kd_list" value="<?php echo $data['kd_list']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%">Nama Konsumen</td>
        <td> <input type="text" class="form-control" name="nm_kons" value="<?php echo $data['nm_kons']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%">Nama Produk</td>
        <td> <input type="text" class="form-control" name="nm_prod" value="<?php echo $data['nm_prod']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%">Tanggal Fix</td>
        <td> <input type="date" class="form-control" name="tgl_fix" value="<?php echo $data['tgl_fix']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%">Jumlah</td>
        <td> <input type="text" class="form-control"  name="jml_list" value="<?php echo $data['jml_list']; ?>" required> </td>
    </tr>
    </table>
   

    <table border="1" width="100%"><br>
            <tr>
            <td class="bg-light">Remarks<br>
            </td>
            </tr>

<tr>
  <td>
  <textarea name="remar" style="width: 100%" placeholder="Remarks" required><?php echo $data['remar']; ?></textarea>
  </td>
</tr>

            </table>
            
          <br>
          <br>
  




  
  <table border="1" width="100%">

<tr>
  <td width="50%" class="text-center bg-primary text-white">Dibuat Oleh</td>
  <td width="50%" class="text-center bg-primary text-white">Line SPV</td>
</tr>

  <tr>

  
  
        <td class="text-center text-black bg-light"><?php echo $data['oleh']; ?></td>
        


        <?php
              include "koneksi.php";
              $sql=mysqli_query($koneksi,"select * from table_spv where kode='rnd'");
              $data=mysqli_fetch_array($sql);
     ?>




        <td class="text-center text-black bg-light"><?php echo $data['nama']; ?></td>

  </tr>


  </table>
  

  <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from form_list WHERE no_form LIKE '%DR%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                                }
                                ?>


<br>



  <div width=15% class="text-left">
                    <a href="data_lr.php"><button type="button" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Back</button></a>
                    <button type="submit" class="btn btn-primary" name="proses"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button></br></br>
                    </div>
                    </div>
  
  <div class="container p-5 ">

  </div>
                                  


</form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>


















                      
<?php
                /* digunakan update data */
                include "koneksi.php";

                if(isset($_POST['proses'])){
                    mysqli_query($koneksi,"update form_list set
                            kd_list = '$_POST[kd_list]',
                             nm_kons = '$_POST[nm_kons]',
                             nm_prod = '$_POST[nm_prod]',
                             tgl_fix = '$_POST[tgl_fix]',
                             jml_list = '$_POST[jml_list]',
                             remar = '$_POST[remar]'
                            where no_form = '$_GET[kode]'");


                    echo "<script>alert('Data baru telah dirubah');window.location='data_lr.php';</script>";
                    // echo "Data baru telah diubah";
                    // echo "<meta http-equiv=refresh content=1;URL='dashboard.php>'";
                
                }
                ?>


</body>
</html>