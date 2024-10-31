<?php

include 'koneksi.php';
session_start();
$uname = $_SESSION['user_name'];

if(isset($_POST['update_profile'])){

   $id = mysqli_real_escape_string($koneksi, $_POST['id']);
   $update_name = mysqli_real_escape_string($koneksi, $_POST['update_name']);
   $update_uname = mysqli_real_escape_string($koneksi, $_POST['update_user_name']);
   

   mysqli_query($koneksi, "UPDATE `users` SET name = '$update_name', user_name = '$update_uname' WHERE user_name = '$uname'") or die('query failed');



   

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($koneksi, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($koneksi, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($koneksi, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $pesan[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $pesan[] = 'confirm password not matched!';
      }else{
         mysqli_query($koneksi, "UPDATE `users` SET password = '$confirm_pass' WHERE user_name = '$uname'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   // $update_image = $_FILES['update_image']['name'];
   // $update_image_size = $_FILES['update_image']['size'];
   // $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   // $update_image_folder = 'uploaded_img/'.$update_image;

   // if(!empty($update_image)){
   //    if($update_image_size > 2000000){
   //       $message[] = 'image is too large';
   //    }else{
   //       $image_update_query = mysqli_query($koneksi, "UPDATE `users` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
   //       if($image_update_query){
   //          move_uploaded_file($update_image_tmp_name, $update_image_folder);
   //       }
   //       $message[] = 'image updated succssfully!';
   //    }
   // }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="stylegin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.0.1/remixicon.css"/>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


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
<body>
<div class="update-profile">

   <?php
      $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
   <?php
         // if($fetch['image'] == '')
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         if(isset($pesan)){
            foreach($pesan as $pesan){
               echo '<div class="error">'.$pesan.'</div>';
            }
         }
      ?>
      <img src="img/cv.jpg" class="img-circle" alt="User Image" />
      <div class="flex">
         <div class="inputBox">

            <span>fullname :</span>
            <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>" class="box">
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>your username :</span>
            <input type="text" name="update_user_name" value="<?php echo $fetch['user_name']; ?>" class="box">
            <!-- <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box"> -->
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="profile.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>
<div class="loader"></div>