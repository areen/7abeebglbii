<html>
	<head>
		<meta charset="UTF-8">
		<title>Example of Twitter Bootstrap 3 Accordion</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script src="./ajax.js"></script>	

		<script>
		$(".openpanel").on("click", function() {
			$("#panel3").collapse('show');
		});
		$(".closepanel").on("click", function() {
			$("#panel3").collapse('hide');
		});

		/* ensure any open panels are closed before showing selected */
		$('#accordion').on('show.bs.collapse', function () {
			$('#accordion .in').collapse('hide');
		});
		</script>

	<head>
	<body>


<?php
	echo"Hello World ... ";

	
	
?>
	</body>
	
	
</html>