<?php

use Mpdf\Tag\Header;
use Mpdf\Tag\Footer;

 ob_start(); 
 ?>
<html>
<head>
<title>FR.RND. Logbook Serah Terima Base PDF</title>
  <style>
     table {
      border-collapse: collapse;
      table-layout:fixed;width: 1330px;
      
    }
    .table th {
      padding: 5px;
      
      border-collapse: collapse;
    }
    .table td {
      word-wrap:break-word;
      
      border-collapse: collapse;
      width: 20%;
      padding: 5px;
    }
  </style>
  
</head>
<body>
  
<?php
  // Load file koneksi.php
  include "koneksi.php";
  $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
  $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
  if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
    // Buat query untuk menampilkan semua data transaksi
    $query = "SELECT * FROM base";
    $label = "Semua Data Logbook Serah Terima Base";
    $nama_hari ="Hari/Tanggal : ";
   }else{ // Jika terisi
      // Buat query untuk menampilkan data transaksi sesuai periode tanggal
      $query = "SELECT * FROM base WHERE (tgl BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."')";
      $url_cetak = "serah_terima_pdf?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&cetak=true";
      $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
      $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
      $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
      $nama_hari = 'Hari/Tanggal : ';
    
  }


  ?>
  <!-- <p align="right">Halaman 1 dari 20 <br> FR.QA.036-00</p> -->
   <br><br>
  <table border="1" width="100%">
  <tr>
    <td width="300px"><center><img src="img/wer.jpg" alt="adev" width="200px"></center></td>
    <td style="background-color: darkblue; color:white; padding: 90px;"><h1><center>PT ADEV NATURAL INDONESIA</center></h1></td>
  </tr>
  <tr>
    <td width="100px" style="background-color: darkblue; color:white; padding: 90px;" colspan="2"><h1><center>LOGBOOK SERAH TERIMA BASE</center></h1></td>
  </tr>
  <tr>
    <td style="padding: 10px;">NOMOR FORM</td>
    <td>FR.PRD.</td>
  </tr>
  <tr>
    <td style="padding: 10px;">DIVISI/DEPARTEMEN</td>
    <td>Production/Processing</td>
  </tr>
  <tr>
    <td style="padding: 10px;">PERIODE</td>
    <td><?php echo @$_GET["tgl_awal"] ?>
                            <span class="input-group-addon">-</span>
                            <?= @$_GET["tgl_akhir"] ?></td>
  </tr>

</table><br><br>
  

<p align="left"><u>LOGBOOK REKAP KEGIATAN PENIMBANGAN</u></p>
<br><br><br><br>
<p align="left">Nomor Logbook : FR.RND.</p>
<br><br><br><br>
<table border="1" width="100%">
                  <tr>
                    <th><center>Disiapkan Oleh,</center></th>
                    <th><center>Diketahui Oleh,</center></th>
                    <th><center>Disetujui Oleh,</center></th>
                  </tr>
                    <tr>
                      <td style="padding-left: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                      <td style="padding-left: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                      <td style="padding-left: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                    </tr>
                    <tr>
                      <td>Jabatan : </td>
                      <td>Jabatan : </td>
                      <td>Jabatan : </td>
                    </tr>


</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php echo $label ?>
  <br>
  <br>
  <b><?php echo $nama_hari ?></b>
  <br><br>
  <table border="1" width="100%">
  <tr style="background-color: darkblue;">
        <th align="center" style="color: white;" width="2">No</th>
        <th align="center" style="color: white;" width="150">Tanggal Input</th>
        <th align="center" style="color: white;" width="100">No Form</th>
        <th align="center" style="color: white;" width="250">Merek/Nama Produk</th>
        <th align="center" style="color: white;" width="100">Skala</th>
        <th align="center" style="color: white;" width="100">Jenis Sedia</th>
        <th align="center" style="color: white;" width="100">Tanggal</th>
        <th align="center" style="color: white;" width="250">Diserahkan Oleh Nama</th>
        <th align="center" style="color: white;" width="250">Diterima Oleh Nama</th>
        <th align="center" style="color: white;" width="100">Dibuat Oleh</th>
        <th align="center" style="color: white;" width="250">Remarks</th>
      </tr>
      
    <?php
     include "koneksi.php";
     $i=1;
     $ambildata = mysqli_query($koneksi,"select * from base WHERE no_form LIKE '%SB%' ORDER by id DESC");
     while($tampil = mysqli_fetch_object($ambildata))
     {
    $ambildata = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysqli_num_rows($ambildata); // Ambil jumlah data dari hasil eksekusi $sql
    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
      while($tampil = mysqli_fetch_array($ambildata)){ // Ambil semua data dari hasil eksekusi $sql
        $tgl = date('d-m-Y', strtotime($tampil['tgl'])); // Ubah format tanggal jadi dd-mm-yyyy
        echo "<tr>";
                                echo "<td align='center'>".$i++."</td>";
                                echo "<td align='center'>". $tampil["tgl_input"] ."</td>";
                                echo "<td align='center'>".$tampil["no_form"]."</td>";
                                echo "<td align='center'>".$tampil["nm_pro"]."</td>";
                                echo "<td align='center'>".$tampil["skl"]."</td>";
                                echo "<td align='center'>".$tampil["jns_sedia"]."</td>";
                                echo "<td align='center'>".$tampil["tgl"]."</td>";
                                echo "<td align='center'>".$tampil["serah_nm"]."</td>";
                                echo "<td align='center'>".$tampil["tm_nm"]."</td>";
                                echo "<td align='center'>".$tampil["oleh"]."</td>";
                                echo "<td align='justify'>".$tampil["remar"]."</td>";
                                echo "</tr><br><br>";
                            
                                
      }
    }else{ // Jika data tidak ada
      echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
  
}
    ?>
   
  </table>


  
  
    
</body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();
require_once __DIR__ . '/assets/vendor2/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [250, 380],
    'orientation' => 'L',
    'setAutoTopMargin' => 'stretch',
    'autoMarginPadding' => -10,
    'setAutoBottomMargin' => 'stretch'
  ]);

  

  
  $mpdf->SetHTMLHeader('
<div style="text-align: right;">
    Halaman {PAGENO} dari {nbpg}
    <br>
    FR.QA.036-00
    <br><br><br><br>
</div> ');



  $mpdf->SetHTMLFooter('
  <br><br><br><br><br><br>
  <table width="100%">
  <tr>
  <td style="background-color: darkblue; color:white;"><h5>PT. Adev Natural Indonesia</h5></td>
  </tr>
  </table>
 
  
    <table width="100%">
        <tr>
          <td style="color: darkblue;">Jl. Curug Mekar, RT 02 RW, Kel. Curug Mekar <br> Kec. Bogor Barat, Kota Bogor16113 </td>
          <td width="16"></td>
          <td style="color: darkblue;">Telp.:02517539769</td>
          <td></td>
          <td width="15"><img src="img/fb.jpg" width="19">
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
        <td width="20"></td>
        <td><img src="img/ig.jpg" width="19"></td>
        <td style="color: darkblue;"> adev.official
        </tr>
    </table>');
    
    
    

$mpdf->WriteHTML($html);
$mpdf->Output('Data LOGBOOK SERAH TERIMA BASE.pdf', 'I');
?>