<header>
	<div class="container">
		<img id="logo" src="img/logo.png" height="32" width="32" alt="|DN|"/>
				
		<div id="logo-text">
		    <p id="logo-name">DERRIK NELSON</p>
		    <p id="logo-slogan">composition|counseling|christianity</p>
		</div>
		    
		<nav>
		    <ul>
		    	<?php	//Switch case to add the .active class to the current tab in the nav
		    		switch($page) {
			    		case("About"):
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
			    		default:
			    			$class1 = "";
			    			$class2 = "";
			    			$class3 = "";
			    			$class4 = "";
		    		}	
		    		
		    		echo '
		    		<li ' . $class1 . '><a href="about.php">ABOUT</a></li>
		    		<li ' . $class2 . '><a href="portfolio.php">PORTFOLIO</a></li>
		    		<li ' . $class3 . '><a href="blog.php">BLOG</a></li>
		     		<li ' . $class4 . '><a href="contact.php">CONTACT</a></li>
		     		<li id="search"><img src="img/search.png" alt="search"/></li>';
			 	?>
		    </ul>
		</nav>				
	</div>
</header>

