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
		<h1>areen</h1>
		<h1>areen</h1>


<?php
	echo'Hello World ... ';

	echo"	<div class='panel-group' id='accordion'>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
						                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#panel1'>Panel 1</a>
									</h4>
								</div>
								<div id='panel1' class='panel-collapse collapse'>
									<div class='panel-body'>
						                Contents panel 1
									</div>
								</div>
						    </div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
						                <a class='accordion-toggle'data-toggle='collapse' data-parent='#accordion' href='#panel2'>Panel 2</a>
									</h4>
								</div>
								<div id='panel2'class='panel-collapse collapse'>
									<div class='panel-body'>
						                Contents panel 2
									</div>
								</div>
						    </div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
						                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#panel3'>Panel 3</a>
									</h4>
								</div>
								<div id='panel3' class='panel-collapse collapse'>
									<div class='panel-body'>
						                Contents panel 3
									</div>
								</div>
						    </div>
						</div>";

	
	
?>
	</body>
	
	
</html>