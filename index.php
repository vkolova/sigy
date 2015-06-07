<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sigy</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="main-header">
		<div class="container">
			<nav class="navbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-logo" href="#" title=""><img src="images/logo.png" alt=""></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#home" title="">Начало</a></li>
					<li><a href="#aboutus" title="">За нас</a></li>
					<li><a href="#portfolio" title="">Сигналите</a></li>
				  </ul>
				</div><!-- /.navbar-collapse --><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<section id="home" data-target="home">
		<div class="static-banner">
			<div class="banner-text">
				<h1>Писна ли ти?</h1>
				<h2>Искаш да помогнеш за решаването на обществените и социалните проблеми в нашата Родина!</h2>
				<a href="#aboutus" class="btn btn-tranparent">НАУЧИ ПОВЕЧЕ</a>
			</div>
		</div>
	</section>
	
	<section id="aboutus" data-target="aboutus">
		<div class="section-area aboutus offwhite">
			<div class="container">
				<div class="title-section text-center">
					<h1>Имаш това, което ти трябва!</h1>
					<h3> Нашата цел е да улесним комуникацията между гражданите и институциите в България чрез създаването на удобно мобилно приложение. 
					Визията е сигналите да бъдат изпращани директно към този уеб сайт, за да може отговорните институции да се самосезират. </h3>
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio" data-target="portfolio">
		<div class="section-area portfolio offwhite">
			<div class="container">
				<div class="title-section text-center">
					<h1>Сигналите</h1>
					<ul class="list-inline filter-list">
						<li class="active"><a href="#" title="" data-filter="*">Всички</a></li>
						<li><a href="#" title="" data-filter=".logo">Институция</a></li>
						
				</div>
				<ul class="items_container">
					<?php
					$db = mysql_connect("localhost", "root", "12345678");
					mysql_select_db('sigy');
					
					$query = "SELECT * FROM complaints ";
					
					$result = mysql_query($query, $db);

					while($row = mysql_fetch_row($result)){
						echo "<li class='logo'>";
						echo "<img src='images/swirl_pattern.png'>";
						echo "<div class='overlay-data top'>";
						echo "<div class='overlay-inner'>";
						echo "<div>";
						for( $i = 1; $i < 5; ++$i) {
							echo "<p>" . $row[$i] . "</p>";
						}
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</li>";

					}
					?>
				</ul>
			</div>
		</div>
	</section>
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 footer-left-section">
					<h3><img src="images/logo-white.png" alt=""></h3>
					<p>Lorem ipsum dolor sit amet, te vel illud clita tempor. Commodo laoreet mei no. Vis ea mollis mediocrem voluptatum, ad harum nominati duo. Dictas periculis salutatus ei est, eu odio augue vel. </p>
				</div>
				<div class="col-sm-4 footer-center-section">
					<h3>Контакти</h3>
					<ul>
						<li>
							<span class="fa fa-map-marker"></span>
							99 Barnard St - Suite 111 <br>
							United States - GA 22222 
						</li>
						<li>
							<span class="fa fa-phone"></span>
							P: 3333 222 1111 <br> F: 3333 222 1111
						</li>
						<li>
							<span class="fa fa-envelope"></span>
							support@dot.com
						</li>
					</ul>
				</div>
				<div class="col-sm-4 footer-right-section">
					<h3>Subscribe</h3>
					<p>Lorem ipsum dolor sit amet, te vel illud clita tempor. Commodo laoreet mei no. vel. </p>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		<p>Copyright 2015  sigy</p>
	</div>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>	
	<!-- for slider -->
	<script src="js/jquery.bxslider.min.js"></script>	
	<!-- for mesonery -->
	<script src="js/isotope.pkgd.min.js"></script>	
	<!-- for fancybox -->
	<link rel="stylesheet" href="js/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<!-- end for fancy box -->
	<script src="js/jquery.sticky-kit.min.js"></script>	
	<script src="js/script.js"></script>	
</body>
</html>