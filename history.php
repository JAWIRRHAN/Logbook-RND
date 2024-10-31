<?php

include 'koneksi.php';
session_start();
$uname = $_SESSION['user_name'];

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adev Natural Indonesia | Data Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="list.css">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->




        <style>
		.loader {
			position: fixed;
			left: 0vw;
			width: 100vw;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #333333;
			transition: opacity 0.75s, visibility 0.75s;
			}
			.loader--hidden {
				opacity: 0;
				visibility: hidden;
				}

				.loader::after {
				content: "";
				width: 75px;
				height: 75px;
				border: 15px solid #dddddd;
				border-top-color: #009578;
				border-radius: 50%;
				animation: loading 0.75s ease infinite;
				}

				@keyframes loading {
				from {transform: rotate(0turn);}
				to {transform: rotate(1turn);}
				}

	</style>
	<script>
		window.addEventListener("load", () => {
			const loader = document.querySelector(".loader");

			loader.classList.add("loader--hidden");

			loader.addEventListener("transitionend", () => {
				document.body.removeChild(loader);
			});
			});
	</script>

    </head>
    
    <body class="skin-black">
        
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="dashboard.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin Adev R&D
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                
                <!-- Sidebar toggle button-->
                 
                 
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                
                <ul class="navbar-nav">
   
  
   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
   <table border="0" width="100%">
   <tr>
    <td>
   <a href="form_list.php" type="button" class="ty btn-light"><i class="fa fa-home fa-2x"></i> <b>Home</b></a>
   </td>
   
   <td>
   <div class="btn-group">
   <button type="button" class="ton btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>All Logbook</b></button>
   <div class="dropdown-menu">
   <a class="dropdown-item" href="#"><h4>LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENYERAHAN SAMPEL MICRO STABTEST</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN ALAT OVERHEAD STIRRER</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN ALAT HOMOGENIZER</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN ALAT BLENDER</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN ALAT HOT PLATE</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN KAMERA R&D</h4></a>
   <a class="dropdown-item" href="#"><h4>LOGBOOK PENGGUNAAN ALAT TOKEBI</h4></a>
   <!-- <a class="dropdown-item" href="#">Something else here</a> -->
   <!-- <div class="dropdown-divider"></div> -->
   <!-- <a class="dropdown-item" href="#">Separated link</a> -->
 </div>
 </div>
 </td>
<td>
 <div width="12px" class="modal-center">
   <button type="button" class="block btn-light"><b>Reporting</b></button>
   <!-- <a href="dashboard.php"><button type="submit" class="btn btn-primary"><i class="fa fa-back" aria-hidden="true"></i> Back</button></a> -->
   </div>
   </td>

   </tr>
   </table>  
</ul>
<div class="loader"></div>

                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                          
                        <!-- Notifications: style can be found in dropdown.less -->
                       
                        <!-- Tasks: style can be found in dropdown.less -->
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                <?php
                                    $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname'") or die('query failed');
                                    if(mysqli_num_rows($select) > 0){
                                        $fetch = mysqli_fetch_assoc($select);
                                    }
                                ?>
                               <img src="img/cv.jpg" class="" alt="User Image" />
                               
                                    <p>
                                    <?php echo $fetch['name']; ?>
                                        <small>Member since <?php echo date('M Y')?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="index2.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        <img src="img/cv.jpg" class="" alt="User Image" />
                        
                        </div>
                        
                        <div class="pull-left info">
                            <p>Hello, <?php echo $fetch['name']; ?></p>




                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    <li class="active">
                            <a href="dashboard_overhead.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="form_input_overhead.php">
                                <i class="fa fa-list"></i> <span>Form Input</span>
                            </a>
                        </li>
                        <?php
                             if($_SESSION["level"] == "admin"){

                            echo ' <li>
                            <a href="adduser2.php">
                                <i class="fa fa-user"></i> <span>Add User</span>
                            </a>
                        </li>

                        <li>
                            <a href="form_user.php">
                                <i class="fa fa-users"></i> <span>Data User</span>
                            </a>
                        </li>';

                        }else echo"";

                    ?>
                       
            </aside>

<br>

                      
<?php
    error_reporting(0);
//if($kd=="LC"){
     include "koneksi.php";
     $no = mysqli_query($koneksi,"SELECT no_form FROM alat WHERE no_form like '%OS%' ORDER BY id DESC");
     $kdfrm = mysqli_fetch_array($no);
     $kd     = $kdfrm['no_form'];
     $urut   = substr($kd, 9, 4);
     //CT-PR-22-0001
     $tambah = (int) $urut + 1;
     $urut2  = substr($kd, 6,2);
     $thn = date("y");
     $bln = date("m");

     if ($urut2!==$thn){
        $format = "OS-" .$bln."-".$thn."-"."0001";
     }else{
         if (strlen($tambah) == 1){
           $format = "OS-".$bln."-".$thn."-"."000".$tambah;
         }else if (strlen($tambah) == 2) {
           $format = "OS-".$bln."-".$thn."-"."00".$tambah;
         }else if (strlen($tambah) == 3) {
           $format = "OS-".$bln."-".$thn."-"."0".$tambah;
         }
         else{
           $format = "OS-".$bln."-".$thn."-".$tambah;
         }
     };
    //}

    
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    <a href="export_pdf_overhead.php"><button type="button" class="btn btn-danger"><i class="fa fa-sign-in"></i> Export</button></a></br>
                        <!-- <small>advanced tables</small> -->
                    </h1>
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
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                 

                                    <div class="card-header">


                                <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <!-- <button><a href="barang-tambah.php" type="submit">Tambah Barang</button></br></br> -->
                                       
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>No Form<center></th>
                                                <th><center>Tanggal<center></th>
                                                <th><center>Uraian Penggunaan<center></th>
                                                <th><center>Kondisi Alat<center></th>
                                                <th><center>Nama<center></th>
                                                <th width="290"style="text justify"><center>Remarks<center></th>
                                                <th><center>Dibuat Oleh<center></th>
                                                <th colspan="2"><center>Aksi<center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        

                                                    <h1><center><b>	
                                                    LOGBOOK PENGGUNAAN ALAT OVERHEAD STIRRER</b></center></h1>
                                                    <br><br>
                                        <?php 
                                             include "koneksi.php";
                                             $no=1;
                                             $ambildata = mysqli_query($koneksi,"select * from alat WHERE no_form LIKE '%OS%' ORDER by id DESC");
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
                                                <td><center><?php echo $tampil->remar ?></center></td>
                                                 <td><center><?php echo $tampil->oleh ?></center></td>
                                                  <td><center><a href='?kode=<?php echo $tampil->no_form ?>'/a> <input onclick="return confirm('Apakah Anda Ingin Mengahapus Data Ini?')" type='button' class='btn-delete'></a>
                                                  <?php
                                                    if($_SESSION["level"] == "admin"){

                                                         echo "
                                                            <a href='form_edit_overhead.php?kode=$tampil->no_form'><input type='button' class='btn-update'></a>

                                                            ";
                                                        }else echo"";

                                                     ?>
                                                 </tr>
                                                   <?php $no++; ?>
                                            
  


         
                                               <?php
                                             if (isset($_GET['kode'])){
                                                 mysqli_query($koneksi,"delete from alat where no_form='$_GET[kode]'");
                                                 // echo "data telah dihapus";
                                                 echo "<script>alert('Data baru telah dihapus');window.location='dashboard_overhead.php';</script>";
                                                 //echo "<meta http-equiv=refresh content=2;URL='barang-edit.php>'";
                                             }

                                                }
                                             ?>


                             


                       









                        


                        </tbody>
                                   </table>
                                </div>
                            </div><!-- /.box -->









                            
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                //$("#example1").dataTable();
                //$('#example1').dataTable({
                    //"bPaginate": true,
                    // "bLengthChange": false,
                    //"bFilter": false,
                    //"bSort": true,
                   // "bInfo": true,
                   // "bAutoWidth": false
                //});
                
            });
        </script>

    </body>
</html>
        
