<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Serah Terima Base.xls");

?>

    <table border="1">

    <tr>
      <th colspan="11" style="background-color: darkblue; color:white">
      <h2><center>Laporan Data Serah Terima Base</center></h2>
      </th>
    </tr>

    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="170">Nama Konsumen/Merek</th>
                      <th style="background-color: darkblue; color:white" width="150">Skala</th>
                      <th style="background-color: darkblue; color:white" width="150">Jenis Sediaan</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal</th>
                      <th style="background-color: darkblue; color:white" width="150">Diserahkan Oleh Nama</th>
                      <th style="background-color: darkblue; color:white" width="150">Diterima Oleh Nama</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
                      
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from base WHERE no_form LIKE '%SB%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->nm_pro ?></center></td>
                <td><center><?php echo $tampil->skl ?></center></td>
                <td><center><?php echo $tampil->jns_sedia ?></center></td>
                <td><center><?php echo $tampil->tgl ?></center></td>
                <td><center><?php echo $tampil->serah_nm ?></center></td>
                <td><center><?php echo $tampil->tm_nm ?></center></td>
                <td><center><?php echo $tampil->oleh ?></center></td>
                <td><justify><?php echo $tampil->remar ?></justify></td>
                
                </tr>
                  <?php $no++; ?>
                       
         
              <?php

          }
            ?>
    </table>