<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title> CS2102</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <style>

      .body-background{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url('assets/img/login.jpg');
        background-size: cover;
        -webkit-filter: blur(5px);
        z-index: -1;
      }

      .login{
      	top: calc(50% - 75px);
        text-align: center;
      	width: 100%;
      	padding-top:10%;
      	z-index: 9999;

      }

      .login input[type=text]{
      	width: 250px;
      	height: 30px;
      	background: transparent;
      	border: 1px solid rgba(255,255,255,0.6);
      	border-radius: 2px;
      	color: #fff;
      	font-family: 'Exo', sans-serif;
      	font-size: 16px;
      	font-weight: 400;
      	padding: 4px;
      }

      .login input[type=password]{
      	width: 250px;
      	height: 30px;
      	background: transparent;
      	border: 1px solid rgba(255,255,255,0.6);
      	border-radius: 2px;
      	color: #fff;
      	font-family: 'Exo', sans-serif;
      	font-size: 16px;
      	font-weight: 400;
      	padding: 4px;
      	margin-top: 10px;
      }

      .login input[type=button]{
      	width: 260px;
      	height: 35px;
      	background: #fff;
      	border: 1px solid #fff;
      	cursor: pointer;
      	border-radius: 2px;
      	color: #a18d6c;
      	font-family: 'Exo', sans-serif;
      	font-size: 16px;
      	font-weight: 400;
      	padding: 6px;
      	margin-top: 20px;
        margin-bottom: 20px;
      }

      .login input[type=button]:hover{
      	opacity: 0.8;
      }

      .login input[type=button]:active{
      	opacity: 0.6;
      }

      .login input[type=text]:focus{
      	outline: none;
      	border: 1px solid rgba(255,255,255,0.9);
      }

      .login input[type=password]:focus{
      	outline: none;
      	border: 1px solid rgba(255,255,255,0.9);
      }

      .login input[type=button]:focus{
      	outline: none;
      }
    </style>
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

  </head>
  <body>
    <div class="body-background"></div>
    <?php include "header.php"; ?>
    <div class="login">
      <div style="font-size:35px;color:white;padding-bottom:20px">
        Log In
      </div>
        <input type="text" placeholder=" email" name="user"><br><br>
        <input type="password" placeholder=" password" name="password"><br>
        <input type="button" value="Login">
        <br>

        <div style="color:white">
          <b>New to ProjectName? <a href="login.php"> Sign Up </a></b>
        </div>
    </div>
  </body>
</html>
