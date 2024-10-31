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
    h1 {
        color: white;
    }
  </style>


<?php
    error_reporting(0);
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM pengemesan_sampel WHERE no_form like '%PS%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "PS-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "PS-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "PS-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "PS-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "PS-".$bln."-".$thn."-".$tambah;
         }
     };
    //}

    
?>


<br><br>

<div class="container modal-lg p-2 bg-primary text-white" style="width:60%; margin-left: 27%">




<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="img/ui.png" width="100px"></td>
    <td class="text-white" width="60%"><center><h1><b>FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
  
</div>


<form action="barang_tambah_pengemasan_sampel.php" method="post">

<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
  <center></center>
  <table class="table" border="1" width="100%">

                <tr>
                    <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td>
                    <td rowspan="2"><center><h3><b>LOGBOOK PENGEMASAN<br>SAMPEL</b></h3></center></td>
                    <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.021-02</b></td>
                </tr>   

                
                <tr>
                    <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $format?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td>
                </tr> 
         </table>
                
  <br>

  <table border="1" width="100%">
    
  <input type="hidden" class="form-control" value="<?php echo $format?>" name="no_form" required>
  <tr>
                    <td class="bg-light" style="width: 30%">Nama Konsumen</td>
                    <td><input type="text" class="form-control" name="nm_kons"  required></td>
            </tr>
            <tr>
                    <td class="bg-light" width="20px">Nama Produk</td>
                    <td><input type="text" class="form-control" name="nm_prod"  required></td>
            </tr>
            <tr>
                    <td class="bg-light" width="20px">Tanggal Release</td>
                    <td><input type="date" class="form-control" name="tgl_relese"  required></td>
            </tr>
            <tr>
                    <td class="bg-light" width="20px">Tanggal Pengemasan</td>
                    <td> <input type="date" class="form-control" name="tgl_pggmn"  required></td>
            </tr>
            <tr>
                    <td class="bg-light" width="20px">Nama Verifikasi Sampel</td>
                    <td> <input type="text" class="form-control" name="nm_verifi"  required></td>
            </tr>

    </table>
 

    <table border="1" width="100%"><br>
            <tr>
            <td class="bg-light">Remarks<br>
            </td>
            </tr>

<tr>
  <td>
  <textarea name="remar" style="width: 100%" placeholder="Remarks"  required></textarea>
  </td>
</tr>

            </table>
           
            
            
          <br>
          <br>
  




  
  <table border="1" width="100%">

<tr>
  <td class="text-center bg-primary text-white">Dibuat Oleh</td>
  <td class="text-center bg-primary text-white">Line SPV</td>
</tr>

  <tr>



 
  <td width="50%">
        <input type="text" class="form-control text-center" name="oleh" value="<?php echo $data['name']; ?>" readonly>
    </td>
        <?php
              include "koneksi.php";
              $sql=mysqli_query($koneksi,"select * from table_spv where kode='rnd'");
              $data=mysqli_fetch_array($sql);
              ?>

<td width="50%">
        <input type="text" class="form-control text-center" name="nama" value="<?php echo $data['nama']; ?>" readonly>
    </td>

  </tr>


  </table>
  



<br>

    <div class="modal-footer-left">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit Data</button>
      <a href="form_list.php" type="back" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Back</a>
      <!-- <a href="dashboard.php"><button type="submit" class="btn btn-primary"><i class="fa fa-back" aria-hidden="true"></i> Back</button></a> -->
      </div>


  </div>
  </center>



  <div class="container p-5 ">

  </div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>












</form>
</body>
</html>