<?php

include 'header.php';



?>



<br><br><br>
 
 <style>
     table {
      border-collapse: collapse;
      border: 0px solid black;
      
    }
    .table th {
      padding: 2px;
      
      border-collapse: collapse;
    }
    .table td {
      word-wrap:break-word;
      
      border-collapse: collapse;
      width: 0%;
      padding: 2px;
    }

    h1{


      color: white;
    }
  </style>



<div class="container modal-lg p-2 bg-primary text-white" style="width:60%; margin-left: 27%">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="img/iu.png" width="100px"></td>
    <td class="text-white" width="60%"><center><h1><b>FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
  
</div>



        
<div class="container modal-lg p-3 border" style="width:60%; margin-left:27%">
        

                  
        </table>     

    

        <form method="get" action="overhead_pdf.php">
        <table border="1" width="100%">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        
                        
                        <!-- <div class="input-group"> -->
                        
                        <tr>
                            <td colspan="3" width="50%"><center>Export PDF Logbook Penggunaan Alat Overhead Stirrer Sesuai Periode</center></td>
                            <td colspan="2" width="50%"><center>Export Excel</center></td>
                            
                          </tr>
                          <tr>
                          <td width="15%"><input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal"></td>
                            <td width="15%"><input type="date" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir"></td>
                            <td><button type="submit" class="form-control btn-primary" name="cetak" value="true"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</button></td>
                            <td><a class="form-control btn btn-success" href="excel_overhead.php" ><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</td>
                          </tr>
                        </div>
                        
                    </div>
                </div>
            </div>
            </table>
            <!-- <button type="submit" name="cetak" value="true" class="btn btn">TAMPILKAN</button> -->
            <?php
            if(isset($_GET['cetak'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                // echo '<a href="index1.php" class="btn btn-default">RESET</a>';
            ?>
        </form>
        <?php
        // Load file koneksi.php
        include "koneksi.php";
        $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            // Buat query untuk menampilkan semua data transaksi
            $query = "SELECT * FROM alat";
            $url_cetak = "overhead_pdf.php";
            $label = "Semua Data Logbook Penggunaan Alat Overhead Stirrer";
            $nama_alat = "Nomor Alat : ";
        }else{ // Jika terisi
            // Buat query untuk menampilkan data transaksi sesuai periode tanggal
            $query = "SELECT * FROM alat WHERE (tgl BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."')";
            $url_cetak = "overhead_pdf.php?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&cetak=true";
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
            $nama_alat = 'Nomor Alat :';

        }
        ?>
        <hr />
        <!-- <h4 style="margin-bottom: 5px;"><b>Data Transaksi</b></h4>
        <?php echo $label ?><br />
        <div style="margin-top: 5px;">
            <a href="<?php echo $url_cetak ?>">Cetak PDF</a>
        </div>
        <div class="table-responsive" style="margin-top: 10px;">
            <table border="1" >
                <thead>
                <tr>
                      <th><center>No</center></th>
                      <th><center>Tanggal Input</center></th>
                      <th><center>No Form<center></th>
                      <th><center>Tanggal/Hari<center></th>
                      <th><center>Nama Konsumen/Merek<center></th>
                      <th><center>Jenis Sediaan<center></th>
                      <th><center>Week Ke<center></th>
                      <th><center>Diterima Oleh<center></th>
                      <th><center>Dibuat Oleh<center></th>
                      <th><center>Remarks</center></th>
                      
                    </tr>
                </thead>
                <tbody> -->
                <?php
                    include "koneksi.php";
                    $i=1;
                    $ambildata = mysqli_query($koneksi,"select * from alat WHERE no_form LIKE '%OS%' ORDER by id DESC");
                    while($tampil = mysqli_fetch_object($ambildata)) 
                    {
                    $ambildata = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                    $row = mysqli_num_rows($ambildata); // Ambil jumlah data dari hasil eksekusi $sql
                    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($tampil = mysqli_fetch_array($ambildata)){ // Ambil semua data dari hasil eksekusi $sql
                            $tgl = date('d-m-Y', strtotime($tampil['tgl'])); // Ubah format tanggal jadi dd-mm-yyyy
                                
                        }
                    }else{ // Jika data tidak ada
                        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                    }
                  }
                  
                    ?>
                  
                </tbody>
            </table>
                    
              <div class="container p-5">

        
            </div>
            </form>


            




        </div>
        </div>
    </div>
  
  <!-- <div class="container p-5 ">

  </div> -->














</form>
<script src="js/custom.js"></script>
    <script>
    $(document).ready(function(){
        setDateRangePicker(".tgl_awal", ".tgl_akhir")
    })
    </script>

</body>
</html>

