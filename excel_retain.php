<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Peninjaman Retain R&D Departement.xls");

?>

    <table border="1">

    <tr>
      <th colspan="11" style="background-color: darkblue; color:white">
      <h2><center>LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</center></h2>
      </th>
    </tr>

    <tr>
        
                    <th style="background-color: darkblue; color:white">No</th>
                    <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
                      <th style="background-color: darkblue; color:white" width="150">No Form</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama Konsumen</th>
                      <th style="background-color: darkblue; color:white" width="150">Jenis Sediaan Sampel</th>
                      <th style="background-color: darkblue; color:white" width="200">Kode Sampel/Tanggal Sampel</th>
                      <th style="background-color: darkblue; color:white" width="150">Nama Peminjam Sampel</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal Meminjam</th>
                      <th style="background-color: darkblue; color:white" width="150">Tanggal Pengembalian</th>
                      <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
                      <th style="background-color: darkblue; color:white" width="300">Remarks</th>
    </tr>
    <?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))
            {
              ?>
                <tr>
                <td><center><?php echo $no ?></center></td>
                <td><center><?php echo $tampil->tgl_input ?></center></td>
                <td><center><?php echo $tampil->no_form ?></center></td>
                <td><center><?php echo $tampil->nm_kons ?></center></td>
                <td><center><?php echo $tampil->jns_smpl ?></center></td>
                <td><center><?php echo $tampil->tgl_smpl?></center></td>
                <td><center><?php echo $tampil->nm_pmnjm?></center></td>
                <td><center><?php echo $tampil->tgl_mnjm?></center></td>
                <td><center><?php echo $tampil->tgl_pgmln?></center></td>
                <td><center><?php echo $tampil->oleh?></center></td>
                <td><justify><?php echo $tampil->ctn_rm ?></justify></td>
                </tr>
                  <?php $no++; ?>  
         
              <?php
          }
            ?>
    </table>