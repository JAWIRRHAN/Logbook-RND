<div></div>
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
        <link rel="stylesheet" href="list.css">
        <link rel="stylesheet" href="style.css">
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        





        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- page script -->
        
        
    





  

      



        <?php
            $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname'") or die('query failed');
            if(mysqli_num_rows($select) > 0){
                $data = mysqli_fetch_assoc($select);
            }
        ?>




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
            margin-top: 0;
			transition: opacity 0.75s, visibility 0.75s;
			}
			.loader--hidden {
				opacity: 0;
				visibility: hidden;
				}

				.loader::after {
				content: "";
				width: 40px;
				height: 40px;
				border: 5px solid #dddddd;
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
            <a class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <p>LOGBOOK R&D</p>
            </a>
            <div class="loader"></div>
        
        </header>




    
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        <img src="img/cv.jpg"  alt="User Image" />
                        
                        </div>
                        
                        <div class="pull-left info" style="font-size: 11px">
                            <p>Hello, <?php echo $data['name']; ?></p>

                            <i class="fa fa-circle text-success"></style></i> Online
                        </div>
                    </div>
                    <!-- search form -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    <li>
                            <a href="dashboard_all.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="form_list.php">
                                <i class="fa fa-list"></i> <span>Form Input</span>
                            </a>
                        </li>

                        <?php
                             if($_SESSION["level"] == "admin"){

                            echo ' <li>
                            <a href="add_user.php">
                                <i class="fa fa-user"></i> <span>Add User</span>
                            </a>
                        </li>

                        <li>
                            <a href="data_user.php">
                                <i class="fa fa-users"></i> <span>Data User</span>
                            </a>
                        </li>';

                        }else echo"";

                    ?>  
                    
            </aside>



 


  


  <nav class="vo  navbar navbar-expand-sm navbar-dark" style="font-size: 50%">
  <ul class="navbar-nav">

  

          
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                 
                <a href="dashboard_all.php" type="button" class="tg"><i style="color: black" class="fa fa-home fa-2x"></i> <b style="color: black">Home</b></a>
              

                <div class="modal-center">
                <a href="form_list.php"><button type="button" class="bj btn-primary" ><b>Form Logbook</b></button></a>
                </div> 

                <div class="btn-group">
                <button type="button" class="fg btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>All Data Logbook</b></button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="data_retain.php"><h4>DATA PEMINJAMAN RETAIN R&D DEPARTEMENT</h4></a>
                <a class="dropdown-item" href="data_micro.php"><h4>DATA PENYERAHAN SAMPEL MICRO STABTEST</h4></a>
                <a class="dropdown-item" href="data_overhead.php"><h4>DATA PENGGUNAAN ALAT OVERHEAD STIRRER</h4></a>
                <a class="dropdown-item" href="data_homogen.php"><h4>DATA PENGGUNAAN ALAT HOMOGENIZER</h4></a>
                <a class="dropdown-item" href="data_alat_blender.php"><h4>DATA PENGGUNAAN ALAT BLENDER</h4></a>
                <a class="dropdown-item" href="data_hotplate.php"><h4>DATA PENGGUNAAN ALAT HOT PLATE</h4></a>
                <a class="dropdown-item" href="data_kamera.php"><h4>DATA PENGGUNAAN KAMERA R&D</h4></a>
                <a class="dropdown-item" href="data_alat_tokebi.php"><h4>DATA PENGGUNAAN ALAT TOKEBI</h4></a>
                <a class="dropdown-item" href="data_serah_terima.php"><h4>DATA SERAH TERIMA BASE</h4></a>
                <a class="dropdown-item" href="data_lr.php"><h4>DATA LIST DATA RETAIN</h4></a>
                <a class="dropdown-item" href="data_ps.php"><h4>DATA PENGEMASAN SAMPEL</h4></a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
              </div>
              </div>



              <div class="btn-group">
                <button type="button" class="block btn-warning dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b class="text-white">Reporting</b></button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="export_pdf_retain.php"><h4>REPORTING LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</h4></a>
                <a class="dropdown-item" href="export_pdf_micro.php"><h4>REPORTING LOGBOOK PENYERAHAN SAMPEL MICRO STABTEST</h4></a>
                <a class="dropdown-item" href="export_pdf_overhead.php"><h4>REPORTING LOGBOOK PENGGUNAAN ALAT OVERHEAD STIRRER</h4></a>
                <a class="dropdown-item" href="export_pdf_homogenizer.php"><h4>REPORTING LOGBOOK PENGGUNAAN ALAT HOMOGENIZER</h4></a>
                <a class="dropdown-item" href="export_pdf_alat_blender.php"><h4>REPORTING LOGBOOK PENGGUNAAN ALAT BLENDER</h4></a>
                <a class="dropdown-item" href="export_pdf_hotplate.php"><h4>REPORTING LOGBOOK PENGGUNAAN ALAT HOT PLATE</h4></a>
                <a class="dropdown-item" href="export_pdf_kamera.php"><h4>REPORTING LOGBOOK PENGGUNAAN KAMERA R&D</h4></a>
                <a class="dropdown-item" href="export_pdf_tokebi.php"><h4>REPORTING LOGBOOK PENGGUNAAN ALAT TOKEBI</h4></a>
                <a class="dropdown-item" href="export_pdf_serah_terima.php"><h4>REPORTING LOGBOOK SERAH TERIMA BASE</h4></a>
                <a class="dropdown-item" href="export_pdf_list_data_retain.php"><h4>REPORTING LOGBOOK LIST DATA RETAIN</h4></a>
                <a class="dropdown-item" href="export_pdf_pengemasan_sampel.php"><h4>REPORTING LOGBOOK PENGEMASAN SAMPEL</h4></a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
              </div>
              </div>

              <div class="navbar-right" style="margin-left: 89%">
                
                <ul class="navbar-nav">

              <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
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
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profile_list.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        </ul>
                        </div>
               <!-- <div class="loader"></div> -->


</ul>
</nav>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- DATA TABES SCRIPT -->
            <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
            <!-- AdminLTE App -->
           
            
 
           
            <script type="text/javascript">
            $(document).ready(function() {
                
                $('#example1').dataTable({
                    //"bOrder": desc
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bSort": false,
                   "bInfo": true,
                   "bAutoWidth": true
                  
                });
                
            });
        </script> 
        
        
        
 
 
 
 
 
 




