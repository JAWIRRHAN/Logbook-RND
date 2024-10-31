<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Penggunaan Kamera R&D.xls");

?>

    <table border="1">

    <tr>
      <th colspan="11" style="background-color: darkblue; color:white">
      <h2><center>LOGBOOK PENGGUNAAN KAMERA R&D</center></h2>
      </th>
    </tr>

    <tr>
      <th style="background-color: darkblue;" align="center" style="color: white;" rowspan="2"><center>No</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="200"><center>Tanggal Input</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>No Form</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>Tanggal Penggunaan</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>Nama Staff</center></th>
      <th style="background-color: darkblue;" colspan="2" width="200px"><center>Waktu Penggunaan</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>Total Penggunaan</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>Nama Pengguna</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="150"><center>Dibuat Oleh</center></th>
      <th style="background-color: darkblue;" rowspan="2" width="200px"><center>Remarks</center></th>
                                                
    </tr>
      <tr style="background-color: darkblue;">
      <th align="center" style="color: white;" width="70px"><center>Mulai</center></th>
      <th align="center" style="color: white;" width="70px"><center>Selesai</center></th>
   </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from kamera WHERE no_form LIKE '%KM%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                                    <td><center><?php echo $no ?></center></td>
                                    <td><center><?php echo $tampil->tgl_input ?></center></td>
                                    <td><center><?php echo $tampil->no_form ?></center></td>
                                    <td><center><?php echo $tampil->tgl_pgn?></center></td>
                                    <td><center><?php echo $tampil->nm?></center></td>
                                    <td><center><?php echo $tampil->wkt_pgn_mulai?></center></td>
                                    <td><center><?php echo $tampil->wkt_pgn_selesai?></center></td>
                                    <td><center><?php echo $tampil->ttl_pgn?></center></td>
                                    <td><center><?php echo $tampil->tgn?></center></td>
                                    <td><center><?php echo $tampil->oleh?></center></td>
                                    <td><justify><?php echo $tampil->ctn_rm?></justify></td>
                                    
                </tr>
                  <?php $no++; ?>  
         
              <?php
          }
            ?>
    </table>