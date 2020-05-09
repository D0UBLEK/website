<!DOCTYPE html>
<html lang="en">
<head>
  <title>Michael's Life</title>
	<meta charset="UTF-8">
	<meta name="description" content="Michael Blog">
	<meta name="keywords" content="michael, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
  <link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<!-- Header section  -->
<header class="header-section hs-bd">
  <a href="../index.html" class="site-logo">
    <img src='../img/logo.png' alt='logo'>
  </a>
  <div class="header-controls">
    <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
  </div>
  <ul class="main-menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="upload.php">Upload</a></li>
  </ul>
</header>
<div class="clearfix"></div>
<!-- Header section end  -->

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
  <div class="container">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Login Form -->
        <form action="login.php" method="POST">
          <span>Answer the secret question to reset your password.</span>
          <span>What's your favorite animal?</span><br/>
          <select name="secret_question">
            <option>Squirrel</option>
            <option>Sasquatch</option>
            <option>Octopus</option>
            <option>Badger</option>
          </select><br/>
          <input type="submit" class="fadeIn fourth" value="login">
        </form>
      </div>
    </div>
  </div>

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/instafeed.min.js"></script>
	<script src="../js/masonry.pkgd.min.js"></script>
	<script src="../js/main.js"></script>

	</body>
</html>
