<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Derrik Nelson</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	
	<body>
		
		<?php echo "PHP works :p"; ?>
		
		<button>Test jQuery</button>
		
		<script>
			alert("Javascript works");
			
			$(document).ready(function() {
				$('button').click(function() {
					alert("jQuery loads and executes");
				});
			});
			
		</script>
				
		<a href="index.html">Return</a>
		
	</body>

</html>
