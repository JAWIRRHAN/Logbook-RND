<?php

include 'koneksi.php';
session_start();
$uname = $_SESSION['user_name'];


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fardhan Febryan | Data Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <!-- <link rel="stylesheet" href="style.css"> -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->




        
<style>
		.loader {
			position: fixed;
			top: 0;
			left: 0;
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
            <a href="index.html" class="logo">
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
                <div class="loader"></div>
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                          
                        <!-- Notifications: style can be found in dropdown.less -->
                       
                        <!-- Tasks: style can be found in dropdown.less -->
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <!-- <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><i class="caret"></i></span>
                            </a> -->
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                <?php
                                    $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE id = '$uname'") or die('query failed');
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
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="home2.php" class="btn btn-default btn-flat">Profile</a>
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
                    <!-- <li>
                            <a href="dashboard.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> -->
                        
                        <li class="active">
                            <a href="dashboard2.php">
                                <i class="fa fa-wrench"></i> <span>Form Update</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="adduser2.php">
                                <i class="fa fa-user"></i> <span>Add User</span>
                            </a>
                        </li> -->
            </aside>
                 
 
 
          
 
 
                 
 
 
 
 
 


            <!DOCTYPE html>
<html lang="en">
<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <title>pppppppppppppp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- <link rel="stylesheet" href="style3.css"> -->


</head>


<body>











<div class="container p-2 bg-primary text-white">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><img src="img/dev.png" width="200px"></td>
    <td class="text-white" width="60%"><center><h1><b>FORM</b></h1></center></td>
    <td width="20%"></td>
  </tr>
</table>
  
</div>


<?php

include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from peminjaman where no_form='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>


<form action="" method="post">

<div class="container p-3 border">
  <table class="table" border="1" width="100%">

                <tr>
                    <td><b>INPUT DATE</b></td>
                    <td><b><?php echo date('d/m/Y')?></b></td>
                    <td rowspan="2"><center><h3><b>LOGBOOK PEMINJAMAN RETAIN<br>R&D DEPARTEMENT</b></h3></center></td>
                    <td><b>NOMOR FORMULIR</b></td>
                    <td><b>FR.RND.057-00</b></td>
                </tr>   

                
                <tr>
                    <td><b>LOOKBOOK NO</b></td>
                    <td><b><?php echo $data['no_form']; ?></b></td>
                    <td><b>DIVISI</b></td>
                    <td><b>QD/R&D</b></td>
                </tr>    
                 
                    
                    

  </table>
                
  <br>

  <table border="1" width="100%">
    
    <input type="hidden" class="form-control"  name="no_form"  value="<?php echo $data?>"> 
    
    <tr>
        <td class="bg-light" width="30%"> Nama Konsumen </td>
        <td> <input type="text" class="form-control"  name="nm_kons" value="<?php echo $data['nm_kons']; ?>"> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Jenis Sediaan Sampel </td>
        <td> <input type="text" class="form-control" name="jns_smpl" value="<?php echo $data['jns_smpl']; ?>"> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Kode Sampel / Tanggal Sampel </td>
        <td> <input type="date" class="form-control" name="tgl_smpl" value="<?php echo $data['tgl_smpl']; ?>"> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Nama Peminjam Sampel  </td>
        <td> <input type="text" class="form-control" name="nm_pmnjm" value="<?php echo $data['nm_pmnjm']; ?>"> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Tanggal Meminjam </td>
        <td> <input type="date" class="form-control"  name="tgl_mnjm" value="<?php echo $data['tgl_mnjm']; ?>"> </td>
    </tr>
    <tr>
        <td class="bg-light" width="30%"> Tanggal Pengembalian  </td>
        <td><input type="date" class="form-control"  name="tgl_pgmln" value="<?php echo $data['tgl_pgmln']; ?>"> </td>
    </tr>
    </table>
    <br><br>

    <table border="1" width="100%"><br>
            <tr>
            <td class="bg-light">Remarks<br>
            </td>
           
            </tr>
            </table>
            <textarea name="ctn_rm" rows="3" cols="146" placeholder="Remarks"><?php echo $data['ctn_rm']; ?></textarea>
            
          <br>
          <br>
  




  
  <table border="1" width="100%">

<tr>
  <td width="50%" class="text-center bg-primary text-white">Dibuat Oleh</td>
  <td width="50%" class="text-center bg-primary text-white">Line SPV</td>
</tr>

  <tr>

  
  
        <td class="text-center text-black bg-light"><?php echo $data['oleh']; ?></td>
        


        <?php
              include "koneksi.php";
              $sql=mysqli_query($koneksi,"select * from table_spv where kode='rnd'");
              $data=mysqli_fetch_array($sql);
     ?>




        <td class="text-center text-black bg-light"><?php echo $data['nama']; ?></td>

  </tr>


  </table>
  




<br>



  <div width=15% class="text-right">
                    <a href="dashboard_user.php"><button type="button" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i> Back</button></a>
                    <button type="submit" class="btn btn-primary" name="proses"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button></br></br>
                    </div>
                    </div>
  
  <div class="container p-5 ">

  </div>
                                  <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RTN%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                                }
                                ?>


</form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>


















                      
<?php
                /* digunakan update data */
                include "koneksi.php";

                if(isset($_POST['proses'])){
                    mysqli_query($koneksi,"update peminjaman set
                            nm_kons = '$_POST[nm_kons]',
                            jns_smpl = '$_POST[jns_smpl]',
                            tgl_smpl = '$_POST[tgl_smpl]',
                            nm_pmnjm = '$_POST[nm_pmnjm]',
                            tgl_mnjm = '$_POST[tgl_mnjm]',
                            tgl_pgmln = '$_POST[tgl_pgmln]',
                            ctn_rm = '$_POST[ctn_rm]'
                            where no_form = '$_GET[kode]'");


                    echo "<script>alert('Data baru telah dirubah');window.location='dashboard_user.php';</script>";
                    // echo "Data baru telah diubah";
                    // echo "<meta http-equiv=refresh content=1;URL='dashboard.php>'";
                
                }
                ?>


</body>
</html>