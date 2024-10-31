<?php




include "header.php";

?>


<!-- <link rel="stylesheet"  href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"> -->
                      
    <?php
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM peminjaman WHERE no_form like '%RN%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "RN-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "RN-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "RN-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "RN-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "RN-".$bln."-".$thn."-".$tambah;
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

                                                <center><h2><b>
                                    LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT
                       
                                                </b></h2></center>

                                                </th>

                                       
                                       </tr>
                                            <tr>
                                                <th width="6%"><center>No</center></th>
                                                <th width="150"><center>No Form</center></th>
                                                <th><center>Nama Konsumen</center></th>
                                                <th><center>Jenis Sediaan Sampel</center></th>
                                                <th width="15%"><center>Kode Sampel/Tanggal Sampel</center></th>
                                                <th><center>Nama Peminjam Sampel</center></th>
                                                <th><center>Tanggal Meminjam</center></th>
                                                <th><center>Tanggal Pengembalian</center></th>
                                                <th width="25%"><center>Remarks</center></th>
                                                <th><center>Dibuat Oleh</center></th>
                                                <th><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                        
                                ?>
                    
                                <tr>
                                    <td><center><?php echo $no ?></center></td>
                                    <td><center><?php echo $tampil->no_form ?></center></td>
                                    <td><center><?php echo $tampil->nm_kons ?></center></td>
                                    <td><center><?php echo $tampil->jns_smpl ?></center></td>
                                    <td><center><?php echo $tampil->tgl_smpl?></center></td>
                                    <td><center><?php echo $tampil->nm_pmnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_mnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_pgmln?></center></td>
                                    <td><textarea style="width: 100%; text-align: justify" readonly><?php echo $tampil->ctn_rm ?></textarea></td>
                                    <td><center><?php echo $tampil->oleh?></center></td>
                                    <?php $no++; ?>
                                    <center>
                                    <td><center><a href='?kode=<?php echo $tampil->no_form ?>'/a> <input onclick="return confirm('Apakah Anda Ingin Mengahapus Data Ini?')" type='button' class='btn-delete'></a>

                                    <?php
                             if($_SESSION["level"] == "admin"){

                                echo "
                                    <a href='edit_data_rn.php?kode=$tampil->no_form'><input type='button' class='btn-update'></a>

                                    ";
                                }else echo"";

                                    ?>
                                    
                                </center></td>

                                    </center>
                                </tr>
                                
                        
                    

                                <?php
                                if (isset($_GET['kode'])){
                                    mysqli_query($koneksi,"delete from peminjaman where no_form='$_GET[kode]'");

                                    echo "<script>alert('Data baru telah dihapus');window.location='data_retain.php';</script>";
                
                                }
                            }
                                ?>


                        </table>

                        </div>
                        </div>
                    
                            </tfoot>
                            </tbody>
                                       
                            </div>


                           









                             <!-- Modal -->
                     
     




<!-- <script>


new DataTable('#example1', {
    order: [[3, 'desc']]
});

</script> -->



             <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
             <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script> -->




                            
           
      
    </body>

        
