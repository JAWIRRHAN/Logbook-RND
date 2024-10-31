<?php


include "header.php";

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


                                <table id="example1" border="1" class=" table-hover" style="font-size: 70%; margin-top: -3%" width="100%">
                                        <thead>
                                        <!-- <button><a href="barang-tambah.php" type="submit">Tambah Barang</button></br></br> -->

                                        <tr>
                                            <th colspan="6">

                                        <h1 style="color: white"><center><b>DATA USER R&D</b></center></h1>

                                            </th>

                                        </tr>
                                       
                                            <tr>
                                                <th width="6%"><center>No</center></th>
                                                <th width="150"><center>Full Name</center></th>
                                                <th width="200"><center>Username</center></th>
                                                <th width="200"><center>Password</center></th>
                                                <th width="200"><center>Level</center></th>
                                                <th style="width: 10%"><center>Aksi</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                        include "koneksi.php";
                                        $no=1;
                                        $ambildata = mysqli_query($koneksi,"select * from users order by id desc");
                                        while($tampil = mysqli_fetch_array($ambildata))
                                        {
                                        ?>


                                            <tr>
                                            <td><center><?php echo $no ?></center></td>
                                            <td><center><?php echo $tampil['name'] ?></center></td>
                                            <td><center><?php echo $tampil['user_name'] ?></center></td>
                                            <td><center><input type="password" value="<?php echo $tampil['password'] ?>" class="form-control" readonly></center></td>
                                            <td><center><?php echo $tampil['level'];?></center></td>

                                    <td><center><a href='?user_name=<?php echo $tampil['user_name'] ?>'/a> <input onclick="return confirm('Apakah Anda Ingin Mengahapus Data Ini?')" type='button' class='btn-delete'></a>
                                    <a href='edit_profile2.php?kode=<?php echo $tampil['user_name'] ?>'><input type='button' class='btn-update'></a></center></td>
                                    </center>
                                </tr>
                                <?php $no++; ?>
                        
                                <?php
                                if (isset($_GET['user_name'])){
                                    mysqli_query($koneksi,"delete from users where user_name='$_GET[user_name]'");

                                    echo "<script>alert('Data user telah dihapus');window.location='data_user.php';</script>";
                
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
        
