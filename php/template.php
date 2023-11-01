<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header">
				<?php
					include_once 'header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'sidePane.php';
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
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>