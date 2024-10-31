<?php

include 'koneksi.php';

date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Penyerahan Sampel Micro Stabtest.xls");

?>

    <table border="1">

    <tr>
      <th colspan="11" style="background-color: darkblue; color:white">
      <h2><center>LOGBOOK LAPORAN DATA PENYERAHAN SAMPEL MICRO STABTEST</center></h2>
      </th>
    </tr>

    <tr>
        
        <th style="background-color: darkblue; color:white">No</th>
        <th style="background-color: darkblue; color:white" width="200">Tanggal Input</th>
          <th style="background-color: darkblue; color:white" width="150">No Form</th>
          <th style="background-color: darkblue; color:white">Tanggal/Hari</th>
          <th style="background-color: darkblue; color:white" width="200">Nama Konsumen/Merek</th>
          <th style="background-color: darkblue; color:white" width="150">Jenis Sediaan</th>
          <th style="background-color: darkblue; color:white" width="150">Week Ke</th>
          <th style="background-color: darkblue; color:white" width="150">Diterima Oleh</th>
          <th style="background-color: darkblue; color:white" width="150">Dibuat Oleh</th>
          <th style="background-color: darkblue; color:white">Remarks</th>
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


}
?>
</table>