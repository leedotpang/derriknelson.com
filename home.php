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

	<div id="slides-container">
		<div class="slides"></div>
		<div class="slides"></div>
		<div class="slides"></div>
	</div>
	
	<div class="slide-surface">
	    <h1>WELCOME</h1>
	    <h2>I'm Derrik Nelson</h2>
	    <h3>"Creating something incredible is my passion.<br>Composition is my niche."</h3>
	    <button>Learn More</button>
	    <div class="dot" id="dot-1"></div>
	    <div class="dot" id="dot-2"></div>
	    <div class="dot" id="dot-3"></div>
	</div>	

<!------Services Blocks------>
	
	<div class="container">
		<div class="services" id="pen">
			<div><object type="image/svg+xml" data="img/pen.svg"><img src="img/pen.png" alt=""/></object></div>
			<h2>WRITER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="compose">
			<div><object type="image/svg+xml" data="img/note.svg"><img src="img/note.png" alt=""/></object></div>
			<h2>COMPOSER</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
			<button class="read-more">READ MORE</button>
		</div>
		
		<div class="services" id="preserver">
			<div><object type="image/svg+xml" data="img/preserver.svg"><img src="img/preserver.png" alt=""/></object></div>
			<h2>SAVER</h2>
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
   