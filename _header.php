<header>
	<div class="container">
		<object type="image/svg+xml" data="img/logo.svg" id="logo"><img id="logo" src="img/logo.png" alt="|DN|"/></object>
		    
		<div id="home"><a href="home.php">
		    <div id="logo-text">
		    	<p id="logo-name">DERRIK NELSON</p>
		    	<p id="logo-slogan">composition|counseling|christianity</p>
		    </div>
		</div></a>   
		    
		<nav>
		    <ul>
		    	<?php	//Switch case to add the .active class to the current tab in the nav
		    		switch($page) {
			    		case("Portfolio"):
			    			$class1 = "class='active'";
			    			break;
			    		case("Blog"):
			    			$class2 = "class='active'";
			    			break;
			    		case("Contact"):
			    			$class3 = "class='active'";
			    			break;
			    		default:
			    			$class1 = "class='null'";
			    			$class2 = "class='null'";
			    			$class3 = "class='null'";
		    		}	
		    		
		    		echo '
		    		<li ' . $class1 . '><a href="portfolio.php">PORTFOLIO</a></li>
		    		<li ' . $class2 . '><a href="blog.php">BLOG</a></li>
		     		<li ' . $class3 . '><a href="contact.php">CONTACT</a></li>
		     		<li id="search"><object type="image/svg+xml" data="img/search.svg"><img src="img/search.png" alt="search"/></object></li>';
			 	?>
		    </ul>
		</nav>				
	</div>
</header>

