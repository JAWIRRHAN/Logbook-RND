<?php



include "header.php";



?>



                      
    <?php
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM kamera WHERE no_form like '%KM%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "KM-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "KM-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "KM-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "KM-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "KM-".$bln."-".$thn."-".$tambah;
         }
     };
    //}

    
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                   
                    <!-- <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Data tabel</li>
                    </ol> -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                         

                              


                                    <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i> Klik Untuk Meminjam
                        </button>    -->
                        <!-- <a href="excel.php"><button type="button" class="btn btn-success"><i class="fa fa-file-excel-o"></i>  Export Excel</button> -->
                       



                        <div class="box">
                        <div class="box-body table-responsive">


                                <table id="example1" border="1" class=" table-hover" style="font-size: 70%; margin-top: -3%">
                                        <thead>
                                        <!-- <button><a href="barang-tambah.php" type="submit">Tambah Barang</button></br></br> -->


                                        <tr>
                                            <th colspan="11">

                                        <h1 style="color: white"><center><b>LOGBOOK PENGGUNAAN KAMERA R&D</b></center></h1>

                                            </th>

                                        </tr>
                                       
                                            <tr>
                                                <th rowspan="2" width="5%"><center>No</center></th>
                                                <th rowspan="2" width="150"><center>No Form</center></th>
                                                <th rowspan="2" ><center>Tanggal Penggunaan</center></th>
                                                <th rowspan="2" ><center>Nama Staff</center></th>
                                                <th colspan="2" width="200px"><center>Waktu Penggunaan</center></th>
                                                <th rowspan="2" ><center>Total Penggunaan</center></th>
                                                <th rowspan="2" ><center>Nama Pengguna</center></th>
                                                <th rowspan="2" width="25%"><center>Remarks</center></th>
                                                <th rowspan="2" ><center>Dibuat Oleh</center></th>
                                                <th rowspan="2" width="7%"><center>Aksi</center></th>
                                            </tr>

                                            <tr>
                                                <th width="70px"><center>Mulai</center></th>
                                                <th width="70px"><center>Selesai</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from kamera WHERE no_form LIKE '%KM%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                        
                                ?>
                    
                                <tr>
                                    <td><center><?php echo $no ?></center></td>
                                    <td><center><?php echo $tampil->no_form ?></center></td>
                                    <td><center><?php echo $tampil->tgl_pgn?></center></td>
                                    <td><center><?php echo $tampil->nm?></center></td>
                                    <td><center><?php echo $tampil->wkt_pgn_mulai?></center></td>
                                    <td><center><?php echo $tampil->wkt_pgn_selesai?></center></td>
                                    <td><center><?php echo $tampil->ttl_pgn?></center></td>
                                    <td><center><?php echo $tampil->tgn?></center></td>
                                    <td><textarea style="width: 100%; text-align: justify" readonly><?php echo $tampil->ctn_rm ?></textarea></td>
                                    <td><center><?php echo $tampil->oleh?></center></td>
                                    <center>
                                    <td><center><a href='?kode=<?php echo $tampil->no_form ?>'/a> <input onclick="return confirm('Apakah Anda Ingin Mengahapus Data Ini?')" type='button' class='btn-delete'></a>

                                    <?php
                             if($_SESSION["level"] == "admin"){

                                echo "
                                    <a href='edit_data_km.php?kode=$tampil->no_form'><input type='button' class='btn-update'></a>

                                    ";
                                }else echo"";

                                    ?>
                                    
                                </center></td>

                                    </center>
                                </tr>
                                <?php $no++; ?>
                        
                    

                                <?php
                                if (isset($_GET['kode'])){
                                    mysqli_query($koneksi,"delete from kamera where no_form='$_GET[kode]'");

                                    echo "<script>alert('Data baru telah dihapus');window.location='data_kamera.php';</script>";
                
                                }
                            }
                                ?>


                        </table>


                        </div>
                        </div>
                    
                            </tfoot>
                            </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>/.box-body -->
                            </div><!-- /.box -->

                            <!-- Button trigger modal -->














                             <!-- Modal -->
                     


                       


                        












                            
          
    </body>
</html>
        
