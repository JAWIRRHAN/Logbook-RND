<?php 

ob_start(); ?>
<html>
<head>
  <title>FR.RND.019-01. Logbook Form List Retain PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 1500px;
      border: 0px solid black;
    border-collapse: collapse;
    }
    .table th {
      padding: 5px;
    }
    .table td {
      word-wrap:break-word;
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
            $query = "SELECT * FROM form_list";
            $url_cetak = "form_retain_pdf.php";
            $label = "Semua Data Logbook List Retain";
            $nama = "Logbook List Retain";
        }else{ // Jika terisi
            // Buat query untuk menampilkan data transaksi sesuai periode tanggal
            $query = "SELECT * FROM form_list WHERE (tgl_fix BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."')";
            $url_cetak = "form_retain_pdf.php?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&cetak=true";
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
            $nama = 'Logbook List Retain';

        }
        ?>

   <br><br>
  <table border="1" width="100%">
  <tr>
    <td width="300px"><center><img src="img/v.jpg" alt="adev" width="200px"></center></td>
    <td style="background-color: darkblue; color:white; padding: 90px;"><h1><center>PT ADEV NATURAL INDONESIA</center></h1></td>
  </tr>
  <tr>
    <td width="100px" style="background-color: darkblue; color:white; padding: 90px;" colspan="2"><h1><center>LOGBOOK LIST RETAIN</center></h1></td>
  </tr>
  <tr>
    <td style="padding: 10px;">NOMOR FORM</td>
    <td>FR.RND.019-01</td>
  </tr>
  <tr>
    <td style="padding: 10px;">DIVISI/DEPARTEMEN</td>
    <td>QD/R&D</td>
  </tr>
  <tr>
    <td style="padding: 10px;">PERIODE</td>
    <td><?php echo @$_GET["tgl_awal"] ?>
    <span class="input-group-addon">-</span>
    <?= @$_GET["tgl_akhir"] ?></td>
  </tr>

</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

<p align="left"><u>LOGBOOK LIST RETAIN</u></p>
<br><br><br><br>
<p align="left">Nomor Logbook : FR.RND.019-01</p>
<br><br><br><br>
  <table border="1" width="100%">
                  <tr>
                    <th><center>Disiapkan Oleh,</center></th>
                    <th><center>Diketahui Oleh,</center></th>
                    <th><center>Disetujui Oleh,</center></th>
                  </tr>
                    <tr>
                      <td style="padding-right: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                      <td style="padding-right: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                      <td style="padding-right: 45px; padding:80px; bottom: 0px; display: inline-block; position: initial;"><left></left></td>
                    </tr>
                    <tr>
                      <td>Jabatan : Admin R&D</td>
                      <td>Jabatan : R&D Supervisor </td>
                      <td>Jabatan : QD Manager</td>
                    </tr>


</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <?php echo $label ?>
  <br><br>
  <p align="center"><b><?php echo $nama ?></b></p>
  <table border="1" width="100%">
  <tr style="background-color: darkblue;">
        <th align="center" style="color: white;" width="2">No</th>
        <th align="center" style="color: white;" width="100">Tanggal Input</th>
        <th align="center" style="color: white;" width="100">No Form</th>
        <th align="center" style="color: white;" width="100">Kode</th>
        <th align="center" style="color: white;" width="100">Nama Konsumen</th>
        <th align="center" style="color: white;" width="100">Nama Produk</th>
        <th align="center" style="color: white;" width="100">Tanggal fix</th>
        <th align="center" style="color: white;" width="100">Jumlah</th>
        <th align="center" style="color: white;" width="100">Dibuat Oleh</th>
        <th align="center" style="color: white;" width="200">Remarks</th>
      </tr>
      
    <?php
     include "koneksi.php";
     $i=1;
     $ambildata = mysqli_query($koneksi,"select * from form_list WHERE no_form LIKE '%LR%' ORDER by id DESC");
     while($tampil = mysqli_fetch_object($ambildata))
     {
    $ambildata = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysqli_num_rows($ambildata); // Ambil jumlah data dari hasil eksekusi $sql
    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
      while($tampil = mysqli_fetch_array($ambildata)){ // Ambil semua data dari hasil eksekusi $sql
        $tgl= date('d-m-Y', strtotime($tampil['tgl_fix'])); // Ubah format tanggal jadi dd-mm-yyyy
        echo "<tr>";
                                echo "<td align='center'>".$i++."</td>";
                                echo "<td align='center'>". $tampil["tgl_input"] ."</td>";
                                echo "<td align='center'>".$tampil["no_form"]."</td>";
                                echo "<td align='center'>".$tampil["kd_list"]."</td>";
                                echo "<td align='center'>".$tampil["nm_kons"]."</td>";
                                echo "<td align='center'>".$tampil["nm_prod"]."</td>";
                                echo "<td align='center'>".$tampil["tgl_fix"]."</td>";
                                echo "<td align='center'>".$tampil["jml_list"]."</td>";
                                echo "<td align='center'>".$tampil["oleh"]."</td>";
                                echo "<td align='justify'>".$tampil["remar"]."</td>";
                                echo "</tr>";
                            
                                
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
    'setAutoBottomMargin'=>'stretch'
  ]);

  

  $mpdf->SetHTMLHeader('
<div style="text-align: right;">
    Halaman {PAGENO} dari {nbpg}
    <br>
    FR.QA.036-00
    <br>
</div>');



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
$mpdf->Output('Data LOGBOOK LIST RETAIN.pdf', 'I');
?>