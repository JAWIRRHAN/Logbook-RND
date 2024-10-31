<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Penggunaan Alat Overhead Stirrer.xls");

?>

    <table border="1">

    <tr>
      <th colspan="10" style="background-color: darkblue; color:white">
      <h2><center>LOGBOOK PENGGUNAAN ALAT OVERHEAD STIRRER</center></h2>
      </th>
    </tr>

    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal</th>
                      <th style="background-color: darkblue; color:white" width="170">Uraian Penggunaan</th>
                      <th style="background-color: darkblue; color:white" width="150">Kondisi Alat</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from alat WHERE no_form LIKE '%OS%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->tgl?></center></td>
                <td><center><?php echo $tampil->urai_pggn ?></center></td>
                <td><center><?php echo $tampil->kondisi ?></center></td>
                <td><center><?php echo $tampil->nm ?></center></td>
                <td><center><?php echo $tampil->oleh ?></center></td>
                <td><justify><?php echo $tampil->remar ?></justify></td>
                
                </tr>
                  <?php $no++; ?>  
         
              <?php
          }
            ?>
    </table>