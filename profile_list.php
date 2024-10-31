<?php

include 'koneksi.php';
session_start();
$uname = $_SESSION['user_name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylegin.css">



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
				width: 40px;
				height: 40px;
				border: 7px solid #dddddd;
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
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($koneksi, "SELECT * FROM `users` WHERE user_name = '$uname'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
      ?>
	 <img src="img/cv.jpg" class="img-circle" alt="User Image" />
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile_list.php" class="btn">update profile</a>
      <a href="dashboard_all.php" class="delete-btn">back</a>
      <!-- <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p> -->
   </div>

</div>

</body>
</html>
<div class="loader"></div>
