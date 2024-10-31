<?php

include 'koneksi.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.0.1/remixicon.css"/>
    <link rel="stylesheet" href="stylebr.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Adev Natural Indonesia</title>

    <style>
/* .button {
	float: right;
	background: #2140d8b9;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 115px;
	border: none;
}
.button:hover{
	opacity: .7;
} */
		
		.loader {
			position: fixed;
			top: 0px;
			left: 0vw;
			width: 100vw;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #333333;
			background-size: cover;
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
<body>
   
    <div class="login">
        <img src="img/add.png" alt="login-image" class="login-image">

        <form action="loginproses.php" method="post" class="login-form" enctype="multipart/form-data">
            

            <div class="login-content">
            <div class="avatar">
            <i class="fa fa-user"></i>
          </div>
            <h1 class="login-title">Login</h1>
			<img src="img/iu.png" class="wik">
			<img src="img/maskot.png" class="cuy">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                <div class="login-box">

                    <i class="ri-user-3-line login-icon"></i>
                    <div class="login-box-input">
                        <input type="text" class="login-input" name="user_name" id="login-text" required placeholder=" ">
                        <label for="login-text" class="login-label">Username</label>
                    </div>
                </div>
                <div class="login-box">
                    <i class="ri-lock-2-line login-icon"></i>
                    <div class="login-box-input">
                        <input type="password" class="login-input" name="password" id="login-pass" required placeholder=" ">
                        <label for="login-pass" class="login-label">Password</label>
                        <i class="ri-eye-off-line login-eye" id="login-eye"></i>
                        <!-- <i class="ri-eye-line"></i> -->
                    </div>
                </div>
            </div>
            <div class="login-check">
                <div class="login-check-group">
                    <!-- <input type="checkbox" class="login-check-input" class="login-check">
                    <label for="login-check" class="login-check-label">Remember Me</label> -->
                </div>
                <!-- <a href="lupapw.php" class="login-forget">Forget Password?</a> -->
            </div>
            <input type="submit" name="submit" class="login-button" value="Login">
            <!-- <a href="sign-up2.php"><button class="login-button" id='search-btn' class="btn btn-flat"><i class=""></i> Register</button></a> -->
            <!-- <p class="login-register">
                Don't have an account? <a href="register.php">Register</a>
            </p> -->
        </form>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>
<div class="loader"></div>