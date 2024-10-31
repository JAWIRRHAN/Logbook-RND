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


<?php

include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from kamera where no_form='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>


<form action="" method="post">


<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
  <table class="table" border="1" width="100%">

                <tr>
                    <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td>
                    <td rowspan="2"><center><h3><b>LOGBOOK PENGGUNAAN<br>KAMERA R&D</b></h3></center></td>
                    <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.044-00</b></td>
                </tr>   

                
                <tr>
                    <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $data['no_form']; ?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td>
                </tr>    
                 
                    
                    

  </table>
                
  <br>

  <table border="1" width="100%">
    
    <input type="hidden" class="form-control"  name="no_form"  value="<?php echo $data?>" required > 
    
    <tr>
        <td class="bg-light" style="width: 30%"> Tanggal Penggunaan </td>
        <td> <input type="date" class="form-control"  name="tgl_pgn" value="<?php echo $data['tgl_pgn']; ?>" required> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Nama Staff </td>
        <td> <input type="text" class="form-control" name="nm" value="<?php echo $data['nm']; ?>" required> </td>
    </tr>
    <tr>
        <td rowspan="2" class="bg-light" width="30%"> Waktu Penggunaan </td>
        <td > Mulai : <input type="time" class="form-control" name="wkt_pgn_mulai" value="<?php echo $data['wkt_pgn_mulai']; ?>" required> </td>
       
    </tr>
    <tr>
    <td > Selesai : <input type="time" class="form-control" name="wkt_pgn_selesai" value="<?php echo $data['wkt_pgn_selesai']; ?>" required> </td>
       
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Nama Pengguna </td>
        <td> <input type="text" class="form-control" name="tgn" value="<?php echo $data['tgn']; ?>" required> </td>
    </tr>
    </table>
    

    <table border="1" width="100%"><br>
            <tr>
            <td class="bg-light">Remarks<br>
            </td>
            </tr>

<tr>
  <td>
  <textarea name="ctn_rm" style="width: 100%" placeholder="Remarks" required><?php echo $data['ctn_rm']; ?></textarea>
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
  




<br>



  <div width=15% class="text-left">
                    <a href="data_kamera.php"><button type="button" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Back</button></a>
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
                    mysqli_query($koneksi,"update kamera set
                            tgl_pgn = '$_POST[tgl_pgn]',
                            nm = '$_POST[nm]',
                            wkt_pgn_mulai = '$_POST[wkt_pgn_mulai]',
                            wkt_pgn_selesai = '$_POST[wkt_pgn_selesai]',
                            tgn = '$_POST[tgn]',
                            ctn_rm = '$_POST[ctn_rm]'
                            where no_form = '$_GET[kode]'");


                    echo "<script>alert('Data baru telah dirubah');window.location='data_kamera.php';</script>";
                    // echo "Data baru telah diubah";
                    // echo "<meta http-equiv=refresh content=1;URL='dashboard.php>'";
                
                }
                ?>


</body>
</html>