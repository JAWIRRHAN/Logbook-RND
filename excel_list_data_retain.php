<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan List Data Retain.xls");

?>

    <table border="1">

    <tr>
      <th colspan="10" style="background-color: darkblue; color:white">
      <h2><center>Laporan Data Logbook List Data Retain</center></h2>
      </th>
    </tr>
    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="150">Kode</th>
                      <th style="background-color: darkblue; color:white" width="170">Nama Konsumen</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama Produk</th>
                      <th style="background-color: darkblue; color:white" width="190">Tanggal Fix</th>
                      <th style="background-color: darkblue; color:white" width="150">Jumlah</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from form_list WHERE no_form LIKE '%LR%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input ?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->kd_list ?></center></td>
                <td><center><?php echo $tampil->nm_kons ?></center></td>
                <td><center><?php echo $tampil->nm_prod ?></center></td>
                <td><center><?php echo $tampil->tgl_fix ?></center></td>
                <td><center><?php echo $tampil->jml_list ?></center></td>
                <td><center><?php echo $tampil->oleh ?></center></td>
                <td><justify><?php echo $tampil->remar ?></justify></td>
                </tr>
                  <?php $no++; ?>
                       
  
                  
                  
         
              <?php
            // if (isset($_GET['no_form'])){
            //     mysqli_query($koneksi,"delete from konsumen where no_form='$_GET[no_form]'");
            //     // echo "data telah dihapus";
            //     echo "<script>alert('Data baru telah dihapus');window.location='dashboard.php';</script>";
            //     //echo "<meta http-equiv=refresh content=2;URL='barang-edit.php>'";
            // }

          }
            ?>
    </table>