<header>
	<div class="container">
		<img src="img/logo.svg" id="logo">
		    
		<div id="home"><a href="index.php">
		    <div id="logo-text">
		    	<p id="logo-name">DERRIK NELSON</p>
		    	<p id="logo-slogan">composition|counseling|christianity</p>
		    </div>
		</div></a>   
		    
		<nav>
		    <ul>
		    	<?php	//Switch case to add the .active class to the current tab in the nav
			   	$class1 = "";
			   	$class2 = "";
			   	$class3 = "";
			   	$class4 = "";
		    		switch($page) {
			    		case("Home"):
			    			$class1 = "class='active'";
			    			break;
			    		case("Portfolio"):
			    			$class2 = "class='active'";
			    			break;
			    		case("Blog"):
			    			$class3 = "class='active'";
			    			break;
			    		case("Contact"):
			    			$class4 = "class='active'";
			    			break;
		    		}	
		    		
		    		echo '
		    		<li ' . $class1 . '><a href="index.php">HOME</a></li>
		    		<li ' . $class2 . '><a href="portfolio.php">PORTFOLIO</a></li>
		    		<li ' . $class3 . '><a href="blog.php">BLOG</a></li>
		     		<li ' . $class4 . '><a href="contact.php">CONTACT</a></li>
		     		<li id="search"><img src="img/search.svg" alt="search"/></li>';
			 	?>
		    </ul>
		</nav>				
	</div>
</header>

