<?php

require_once __DIR__ . '/assets/vendor2/autoload.php';

            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' ORDER by id DESC");
            while($tampil = mysqli_fetch_object($ambildata))

$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'format' => [250, 380],
  'orientation' => 'L'
]);
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FR.RND.037-00. Logbook Serah Terima Sampel Micro Stabtest docx 1 </title>
  <link rel="stylesheet" href="stylempdf.css">



</head>
<body>

  <p align="right">Halaman 1 dari 20 <br> FR.QA.036-00</p>
  <table border="1" width="100%">
  <tr>
    <td width="300px"><center><img src="img/wer.jpg" alt="adev" width="200px"></center></td>
    <td style="background-color: darkblue; color:white; padding: 90px;"><h1><center>PT ADEV NATURAL INDONESIA</center></h1></td>
  </tr>
  <tr>
    <td style="background-color: darkblue; color:white; padding: 90px;" colspan="2"><h1><center>LOGBOOK PENYERAHAN SAMPEL MICRO STABTEST</center></h1></td>
  </tr>
  <tr>
    <td style="padding: 10px;">NOMOR FORM</td>
    <td>FR.RND.037-00</td>
  </tr>
  <tr>
    <td style="padding: 10px;">DIVISI/DEPARTEMEN</td>
    <td>RND/QR</td>
  </tr>
  <tr>
    <td style="padding: 10px;">DIVISI/DEPARTEMEN</td>
    <td></td>
  </tr>

</table><br><br><br><br>
  

  <table border="0" width="90%">
  
  <tr>
  <td width="60"></td>
  <td width="60"></td>
  <td style="background-color: darkblue; color:white;"><h5>PT. Adev Natural Indonesia</h5></td><img src="Adev.png">
  </tr>
  </table>
  </center>
  
    <table border="0" width="90%">
        <tr>
        <td width="60"></td>
        <td width="60"></td>
          <td style="color: darkblue;">Jl. Curug Mekar, RT 02 RW, Kel. Curug Mekar <br> Kec. Bogor Barat, Kota Bogor16113 </td>
          <td width="16"></td>
          <td style="color: darkblue;">Telp.:02517539769</td>
          <td></td>
          <td width="15"><img src="logo-facebook.png" width="19">
          <td style="color: darkblue;"> PT. Adev Natural Indonesia
          </td>
          <td width="18" rowspan="2"></td>
          <td rowspan="2" width="35" style="text-align: right; color: darkblue;">www.<b>adev</b>.co.id</td>
        </tr>
        <tr>
        <td></td>
        </tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20"></td>
        <td><img src="icons-ig.png" width="19"></td>
        <td style="color: darkblue;"> adev.official
        </tr>
    </table><br>

<p align="right">Halaman 2 dari 20 <br> FR.QA.036-00</p>
<p align="left"><u>LOGBOOK PENYERAHAN SAMPEL MICRO STABTEST</u></p>
<br><br><br><br>
<p align="left">Nomor Logbook : FR.RND.037-00</p>
<br><br><br><br>
  <table border="1" width="100%">
                  <tr>
                    <th><center>Disiapkan Oleh,</center></th>
                    <th><center>Diketahui Oleh,</center></th>
                    <th><center>Disetujui Oleh,</center></th>
                  </tr>
                    <tr>
                      <td style="padding: 39px;">Nama : Irelta Aurelia</td>
                      <td>Nama : Nurul Syarifah</td>
                      <td>Nama : Dewi Fitriyani</td>
                    </tr>
                    <tr>
                      <td>Jabatan : Admin R&D</td>
                      <td>Jabatan : R&D Supervisor </td>
                      <td>Jabatan : QD Manager</td>
                    </tr>


</table><br><br><br><br><br><br><br><br><br>

  <table border="0" width="90%">
  
  <tr>
  <td width="60"></td>
  <td width="60"></td>
  <td style="background-color: darkblue; color:white;"><h5>PT. Adev Natural Indonesia</h5></td><img src="Adev.png">
  </tr>
  </table>
  </center>
  
    <table border="0" width="90%">
        <tr>
        <td width="60"></td>
        <td width="60"></td>
          <td style="color: darkblue;">Jl. Curug Mekar, RT 02 RW, Kel. Curug Mekar <br> Kec. Bogor Barat, Kota Bogor16113 </td>
          <td width="16"></td>
          <td style="color: darkblue;">Telp.:02517539769</td>
          <td></td>
          <td width="15"><img src="logo-facebook.png" width="19">
          <td style="color: darkblue;"> PT. Adev Natural Indonesia
          </td>
          <td width="18" rowspan="2"></td>
          <td rowspan="2" width="35" style="text-align: right; color: darkblue;">www.<b>adev</b>.co.id</td>
        </tr>
        <tr>
        <td></td>
        </tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20"></td>
        <td><img src="icons-ig.png" width="19"></td>
        <td style="color: darkblue;"> adev.official
        </tr>
    </table><br><br><br><br>






  <p align="right">Halaman 2 dari 20 <br> FR.QA.036-00</p>
  <table border="1" width="100%">
  <tr style="background-color: darkblue;">
        <th align="center" style="color: white; "width="2">No</th>
        <th align="center" style="color: white;" width="100">Tanggal Input</th>
        <th align="center" style="color: white;" width="100">No Form</th>
        <th align="center" style="color: white;" width="100">Tanggal/Hari</th>
        <th align="center" style="color: white;" width="100">Nama Konsumen/Merek</th>
        <th align="center" style="color: white;" width="100">Jenis Sedia</th>
        <th align="center" style="color: white;" width="100">Week Ke</th>
        <th align="center" style="color: white;" width="100">Diterima Oleh</th>
        <th align="center" style="color: white;" width="100">Dibuat Oleh</th>
        <th align="center" style="color: white;" width="100">Remarks</th>
      </tr>';

      
      
      $i = 1;
     foreach($ambildata as $tampil){
      $html .='<tr>
      <td align="center">'. $i++. '</td>
      <td align="center">'. $tampil["tgl_input"] .'</td>
      <td align="center">'. $tampil["no_form"] .'</td>
      <td align="center">'. $tampil["nm_kons"] .'</td>
      <td align="center">'. $tampil["jns_smpl"] .'</td>
      <td align="center">'. $tampil["nm_pmnjm"] .'</td>
      <td align="center">'. $tampil["tgl_mnjm"] .'</td>
      <td align="center">'. $tampil["tgl_pgmln"] .'</td>
      <td align="justify">'. $tampil["ctn_rm"] .'</td>
       <td align="center">'. $tampil["oleh"] .'</td>
</tr>';
     }


$html .='</table><br>
<table border="0" width="90%">
  
  <tr>
  <td width="60"></td>
  <td width="60"></td>
  <td style="background-color: darkblue; color:white;"><h5>PT. Adev Natural Indonesia</h5></td><img src="Adev.png">
  </tr>
  </table>
  </center>
  
    <table border="0" width="90%">
        <tr>
        <td width="60"></td>
        <td width="60"></td>
          <td style="color: darkblue;">Jl. Curug Mekar, RT 02 RW, Kel. Curug Mekar <br> Kec. Bogor Barat, Kota Bogor16113 </td>
          <td width="16"></td>
          <td style="color: darkblue;">Telp.:02517539769</td>
          <td></td>
          <td width="15"><img src="logo-facebook.png" width="19">
          <td style="color: darkblue;"> PT. Adev Natural Indonesia
          </td>
          <td width="18" rowspan="2"></td>
          <td rowspan="2" width="35" style="text-align: right; color: darkblue;">www.<b>adev</b>.co.id</td>
        </tr>
        <tr>
        <td></td>
        </tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20"></td>
        <td><img src="icons-ig.png" width="19"></td>
        <td style="color: darkblue;"> adev.official
        </tr>
    </table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('FR.RND.037-00. Logbook Serah Terima Sampel Micro Stabtest.pdf', 'I');
?>