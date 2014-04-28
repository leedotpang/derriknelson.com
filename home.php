<!DOCTYPE html>
<html lang="en-US">
	<head>
		<?php
			$page = "Home";
			include("_head.php");
		?>
	</head>
	
	<body>
	<?php 
	include("_header.php");
	?>

<!------Image Slider------>

	<div class="slider">
		<ul class="slides">
			<li class="slide" id="slide1"></li>
			<li class="slide" id="slide2"></li>
			<li class="slide" id="slide3"></li>
		</ul>
	</div>
	
	
	<div class="surface">
		<object type="image/svg+xml" data="img/arrow-left.svg" id="left-arrow"></object>
		<object type="image/svg+xml" data="img/arrow-right.svg" id="right-arrow"></object>
	    
	    <h1>WELCOME</h1>
	    <h2>I'm Derrik Nelson</h2>
	    <h3>"Creating something incredible is my passion.<br>Composition is my niche."</h3>
	    <a id="learn-more" href="portfolio.php">Learn More</a>
	</div>	

	<script>
    	$('.slider').glide({
    	    autoplay: 5000,
    	    arrows: '.surface',
    	    arrowLeftText: false,
    	    arrowRightText: false,
    	    navigation: '.surface'
    	});
	</script>
	
<!------Services Blocks------>
	
	<div class="container">
		<div class="services" id="pen">
			<div><object type="image/svg+xml" data="img/pen.svg"><img src="img/pen.png" alt=""/></object></div>
			<h2>WRITER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="note">
			<div><object type="image/svg+xml" data="img/note.svg"><img src="img/note.png" alt=""/></object></div>
			<h2>COMPOSER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="preserver">
			<div><object type="image/svg+xml" data="img/preserver.svg"><img src="img/preserver.png" alt=""/></object></div>
			<h2>LEADER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="bulb">
			<div><object type="image/svg+xml" data="img/bulb.svg"><img src="img/bulb.png" alt=""/></object></div>
			<h2>THINKER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
	</div>

</html>
   