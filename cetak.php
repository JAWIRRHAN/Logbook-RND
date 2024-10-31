<?php
include "koneksi.php";
date_default_timezone_set("ASIA/JAKARTA");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data</title>
</head>
<body>

<table border="1" width="100%">

<tr>
        <td><center><img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/822980288e711af56a92565c1977d0cc.png" alt="adev" width="300"></center></td>
            <td style="background-color: darkblue; color:white;"><h1><center>PT ADEV NATURAL INDONESIA</center></h1></td>
                </tr>   

                
                <tr >
                <td style="background-color: darkblue; color:white;padding: 50px;" colspan="2"><h1><center>LOGBOOK PENYERAHAN SAMPEL MICRO STABTEST</center></h1></td>
                  </tr>
                  <tr>
                <td style="padding: 20px;">NOMOR FORMULIR </td>
                    <td>FR.RND.037-00</td>
                  </tr>
                  <tr>
                    <td style="padding: 20px;">DIVISI/ DEPARTEMEN :</td>
                    <td>QD/RND</td>
                  </tr>
                  <tr>
                  <td style="padding: 20px;">PERIODE</td>
                  <td></td>
                  </tr>

        </table>
        <br><br>
        <table border="1" width="100%">
                  <tr>
                    <th><center>Disiapkan Oleh,</center></th>
                    <th><center>Diketahui Oleh,</center></th>
                    <th><center>Disetujui Oleh,</center></th>
                  </tr>
                    <tr>
                      <td style="padding: 40px;">Nama : Irelta Aurelia</td>
                      <td>Nama : Nurul Syarifah</td>
                      <td>Nama : Dewi Fitriyani</td>
                    </tr>
                    <tr>
                      <td>Jabatan : Admin R&D</td>
                      <td>Jabatan : R&D Supervisor </td>
                      <td>Jabatan : QD Manager</td>
                    </tr>


</table>
<br><br>



<table border="1">

<tr>
  <th colspan="11" style="background-color: darkblue; color:white">
  <h2><center>Laporan Data Penyerahan Sampel Micro Stabtest</center></h2>
  </th>
</tr>


<tr style="background-color: darkblue; color:white">
        
        <th width="20px">No</th>
        <th width="250px">Tanggal Input</th>
          <th>No Form</th>
          <th>Tanggal/Hari</th>
          <th>Nama Konsumen/Merek</th>
          <th>Jenis Sediaan</th>
          <th>Week Ke</th>
          <th>Diterima Oleh</th>
          <th>Dibuat Oleh</th>
          <th>Remarks</th>
</tr>


<?php 
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata)){
              echo"
              <tr>
                 <td><center>$no</center></td>
                                    <td><center>$tampil->no_form</center></td>
                                    <td><center>$tampil->nm_kons</center></td>
                                    <td><center>$tampil->jns_smpl</center></td>
                                    <td><center>$tampil->tgl_smpl</center></td>
                                    <td><center>$tampil->nm_pmnjm</center></td>
                                    <td><center>$tampil->tgl_mnjm</center></td>
                                    <td><center>$tampil->tgl_pgmln</center></td>
                                    <td><justify>$tampil->ctn_rm</justify></td>
                                    <td><center>$tampil->oleh</center></td>
                
                  </tr>";
                  $no++;
                  }
          ?>   

                            
</table>
<script>
    window.print();
</script>  
</body>
</html>