
<!DOCTYPE html>
<html>
	<head>
			<title>LNU top Mobile App</title>
			<link rel="stylesheet" type='text/css' href="<?php echo base_url;?>bs/docs/assets/css/bootstrap.css" />
			<link rel="stylesheet" type='text/css' href="<?php echo base_url;?>style.css" />
			<script type="text/javascript">
				var base_url = "<?php echo base_url; ?>";
			</script>
			<script type='text/javascript' src="<?php echo base_url;?>bs/docs/assets/js/jquery.js"></script>
			<script type='text/javascript' src="<?php echo base_url;?>bs/docs/assets/js/bootstrap.js"></script>
			<script type='text/javascript' src="<?php echo base_url;?>bs/docs/assets/js/bootstrap-carousel.js"></script>
			<script type='text/javascript' src="<?php echo base_url;?>js/javascript.js"></script>
			<script type='text/javascript'>
				$(document).ready(function(){
					$('.carousel').carousel({
					  interval: 2000
					});
				});
			</script>
	</head>
	<body>
		<div class="container white-bg">
			<div id="top_content">
				<nav style="float: right;overflow: auto;margin-right: 10px;">
					<a href="<?php echo base_url;?>home/login">Login</a> |
					<a href="<?php echo base_url;?>home/register">Register</a>
				</nav>
				<nav>
					<a href="">FAQ</a> | 
					<a href="">Forms</a> | 
					<a href="">Directory</a> | 
					<a href="">About</a>
				</nav>
			</div><!--end of top_content-->
			<div id="banner">
				<div id="myCarousel" class="carousel slide">
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item"><center><img src="<?php echo base_url;?>images/prettytext.png"/></center></div>
				    <div class="item"><img src="<?php echo base_url;?>images/system_bg.jpg" /></div>
				    <div class="item"><img src="<?php echo base_url;?>images/rose.jpg" /></div>
				  </div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div><!--end of banner-->
			<div id="content">