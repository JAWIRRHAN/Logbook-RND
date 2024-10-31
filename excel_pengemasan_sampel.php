<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Pengemasan Sampel.xls");

?>

    <table border="1">

    <tr>
      <th colspan="10" style="background-color: darkblue; color:white">
      <h2><center>Laporan Data Logbook Pengemasan Sampel</center></h2>
      </th>
    </tr>
    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="170">Nama Konsumen</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama Produk</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal Release</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal Pengemasan</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama Verifikasi Sampel</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from pengemesan_sampel WHERE no_form LIKE '%PS%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input ?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->nm_kons ?></center></td>
                <td><center><?php echo $tampil->nm_prod?></center></td>
                <td><center><?php echo $tampil->tgl_relese?></center></td>
                <td><center><?php echo $tampil->tgl_pggmn?></center></td>
                <td><center><?php echo $tampil->nm_verifi?></center></td>
                <td><center><?php echo $tampil->oleh?></center></td>
                <td><justify><?php echo $tampil->remar?></justify></td>
                                    
                </tr>
                  <?php $no++; ?>
                       
  
                  
                  
         
              <?php
            

          }
            ?>
    </table>