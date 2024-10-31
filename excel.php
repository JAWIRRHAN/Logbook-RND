<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Penyerahan Sampel Micro Stabtest.xls");

?>

    <table border="1">

    <tr>
      <th colspan="10" style="background-color: darkblue; color:white">
      <h2><center>Laporan Data Penyerahan Sampel Micro Stabtest</center></h2>
      </th>
    </tr>

    <tr style="background-color: darkblue; color:white">
        
                    <th>No</th>
                    <th width="200">Tanggal Input</th>
                      <th width="150">No Form</th>
                      <th>Tanggal/Hari</th>
                      <th width="170">Nama Konsumen/Merek</th>
                      <th width="100">Jenis Sediaan</th>
                      <th width="100">Week Ke</th>
                      <th width="100">Diterima Oleh</th>
                      <th width="100">Dibuat Oleh</th>
                      <th>Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from konsumen WHERE no_form LIKE '%SM%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input ?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->tgl ?></center></td>
                <td><center><?php echo $tampil->nm_kons ?></center></td>
                <td><center><?php echo $tampil->jns_sedia ?></center></td>
                <td><center><?php echo $tampil->week ?></center></td>
                <td><center><?php echo $tampil->terima ?></center></td>
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