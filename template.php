<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header">
				<?php
					include_once 'php/header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'php/sidePane.php';
					?>
			</div>
			<div id="body">
				<!--
                code of other pages starts here
            -->
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="js/sidePane.js"></script>
	<script src="js/footer.js"></script>
</html>

