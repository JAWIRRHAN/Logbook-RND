<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="list.css">
  <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
       
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark"><img src="img/trr.png" width="100px">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <a href="index2.php" type="button" class="tg"><i class="fa fa-home fa-2x"></i> <b>Home</b></a>
        <div class="btn-group">
        <button type="button" class="fg btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>All Logbook</b></button>
          <div class="dropdown-menu">
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
            <li><a class="dropdown-item" href="#">LOGBOOK PEMINJAMAN RETAIN R&D DEPARTEMENT</a></li>
          </div>
        </div>
        <div width="12px" class="modal-center">
        <button type="button" class="block btn-light"><b>Reporting</b></button>
      </ul>
      <div class="container-fluid">
      <ul class="nav justify-content-end">
      <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
                                <span><i class=""></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                <?php
                                    $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE id = '$uname'") or die ('query failed');
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

          </ul>
        </li>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
</div>

</body>
</html>