<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Home – Derrik Nelson</title>
		<?php
			$page = "Home";
			include("_head.php");
		?>
	</head>
	
<body>
	<header>
		<?php include("_header.php"); ?>
	</header>
	
<!-----Image Slider------>

	<div class="slider">
		<ul class="slides">
			<li class="slide" id="slide1"></li>
			<li class="slide" id="slide2"></li>
			<li class="slide" id="slide3"></li>
		</ul>
	</div>
		
	<div class="surface">
		<img src="img/arrow.svg" id="left-arrow"></img>
		<img src="img/arrow.svg" id="right-arrow"></img>
	    
	    <h1>WELCOME</h1>
	    <h2>I'm Derrik Nelson</h2>
	    <h3>"Creating something incredible is my passion.<br>Composition is my niche."</h3>
	    <a id="learn-more" href="portfolio.php">Learn More</a>
	</div>	

	<script>
    	$(window).bind("load", function() {
    		$('.slider').glide({
    		    autoplay: 5000,
    		    hoverpause: false,
    		    arrowLeftText: false,
    		    arrowRightText: false
    		});
		});	
	</script>
	
<!------Services Blocks------>
	
	<div class="container">
		<div class="services" id="pen">
			<div><img src="img/pen.svg" alt=""/></div>
			<h2>WRITER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="note">
			<div><img src="img/note.svg" alt=""/></div>
			<h2>COMPOSER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="preserver">
			<div><img src="img/preserver.svg" alt=""/></div>
			<h2>LEADER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="bulb">
			<div><img src="img/bulb.svg" alt=""/></div>
			<h2>THINKER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
	</div>
	<footer>
		<?php 
			include("_footer.php");
		?>
	</footer>	
</body>
</html>
   