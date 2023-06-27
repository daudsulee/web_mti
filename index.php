<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>KAROSERI AND WINGBOX PT. MITRA TOYOTAKA INDONESIA</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="Shortcut Icon" href="gambar/favicon.ico">
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<div style="position:fixed;right:20px;bottom:20px;">
<a href="https://api.whatsapp.com/send?phone=6281389555495&text=Halo">
<button style="background:#32C03C;vertical-align:center;height:40px;border-radius:5px">
<img src="https://web.whatsapp.com/img/favicon/1x/favicon.png" width="30"></button></a>
</div>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="?page=home"><img src="img/logo_3.png" alt="logolayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="?page=home">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=corporate">Corporate</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=facilities">Facilities</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=product">Product</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=sales">Sales</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=contact">Contact</a>
			</li>
			<li>
			<a class="page-scroll" href="?page=activity">activity</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


<!-- main menu -->
<?php 
				if(isset($_GET['page'])){
					$page=htmlentities($_GET['page']);
					$halaman="$page.php";
					if(!file_exists($halaman) || empty($page)){
						echo "Welcome";
				}
				else{
					include_once "$halaman";
				}
				}else{
					include "home.php";
				}
?>

<!-- end main menu -->


<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">MTI</h1>
		<p>
			&copy; 2018 PT. Mitra Toyotaka Indonesia Template By WowThemes.net
		</p>
	</div>
</div>
</div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>