<?php

include 'koneksi.php';
session_start();

if(isset($_POST['submit'])){

   $uname = mysqli_real_escape_string($koneksi, $_POST['user_name']);
   $pass = mysqli_real_escape_string($koneksi, md5($_POST['password']));

   $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname' AND password = '$pass'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      
    $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['level'] = $row['level'];
      header("location: dashboard_all.php");
   }else{
      header("Location: index.php?error=Incorect user name or password");
        // exit();
   }
}else{
   header("Location: index.php?error=Incorect user name or password");
     // exit();
}

?>