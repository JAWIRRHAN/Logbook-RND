<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Penggunaan Alat Blender.xls");

?>

    <table border="1">

    <tr>
      <th colspan="9" style="background-color: darkblue; color:white">
      <h2><center>LOGBOOK PENGGUNAAN ALAT BLENDER</center></h2>
      </th>
    </tr>

    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal</th>
                      <th style="background-color: darkblue; color:white" width="150">Produk</th>
                      <th style="background-color: darkblue; color:white" width="150">Kondisi Alat</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from alat_blender WHERE no_form LIKE '%AB%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input ?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->tgl ?></center></td>
                <td><center><?php echo $tampil->produk?></center></td>
                <td><center><?php echo $tampil->knds_alt?></center></td>
                 <td><center><?php echo $tampil->nm?></center></td>
                 <td><center><?php echo $tampil->oleh?></center></td>
                 <td><justify><?php echo $tampil->ctn_rm?></justify></td>
                 
                </tr>
                  <?php $no++; ?>  
         
              <?php
          }
            ?>
    </table>