<?php


include "header.php";

?>



                      
<?php
    error_reporting(0);
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM konsumen WHERE no_form like '%SM%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "SM-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "SM-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "SM-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "SM-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "SM-".$bln."-".$thn."-".$tambah;
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
                         

                              


                                  
                       




                        <div class="box">
                        <div class="box-body table-responsive">

                               
                        <table id="example1" border="1" class=" table-hover" style="font-size: 70%; margin-top: -3%">
                                        <thead>
                                        <!-- <button><a href="barang-tambah.php" type="submit">Tambah Barang</button></br></br> -->
                                       <tr>

                                                <th colspan="9">

                                                <center><h2><b>
                                                LOGBOOK PENGGUNAAN ALAT HOMOGENIZER
                       
                                                </b></h2></center>

                                                </th>

                                       
                                       </tr>
                                            <tr>
                                                <th width="50"><center>No</center></th>
                                                <th width="150"><center>No Form</center></th>
                                                <th><center>Tanggal</center></th>
                                                <th><center>Uraian Penggunaan</center></th>
                                                <th><center>Kondisi Alat</center></th>
                                                <th><center>Nama</center></th>
                                                <th width="25%"><center>Remarks</center></th>
                                                <th><center>Dibuat Oleh</center></th>
                                                <th><center>Aksi</center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from homogen WHERE no_form LIKE '%HG%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                        
                                ?>
                    
                                <tr>
                                    <td><center><?php echo $no ?></center></td>
                                    <td><center><?php echo $tampil->no_form ?></center></td>
                                    <td><center><?php echo $tampil->tgl ?></center></td>
                                    <td><center><?php echo $tampil->urai_pggn ?></center></td>
                                    <td><center><?php echo $tampil->kondisi ?></center></td>
                                    <td><center><?php echo $tampil->nm ?></center></td>
                                    <td><textarea style="width: 100%; text-align: justify" readonly><?php echo $tampil->remar ?></textarea></td>
                                    <td><center><?php echo $tampil->oleh ?></center></td>
                                    <?php $no++; ?>
                                    <center>
                                    <td><center><a href='?kode=<?php echo $tampil->no_form ?>'/a> <input onclick="return confirm('Apakah Anda Ingin Mengahapus Data Ini?')" type='button' class='btn-delete'></a>

                                    <?php
                             if($_SESSION["level"] == "admin"){

                                echo "
                                    <a href='edit_data_hg.php?kode=$tampil->no_form'><input type='button' class='btn-update'></a>

                                    ";
                                }else echo"";

                                    ?>
                                    
                                </center></td>

                                    </center>
                                </tr>
                                
                        
                    

                                <?php
                                if (isset($_GET['kode'])){
                                    mysqli_query($koneksi,"delete from homogen where no_form='$_GET[kode]'");

                                    echo "<script>alert('Data baru telah dihapus');window.location='data_homogen.php';</script>";
                
                                }
                            }
                                ?>


                        </table>


                        </div>
                        </div>

                      
                                  


    </body>
        
