<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
   
    if(isset($_SERVER['HTTP_REFERER'])) {
        if ($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/alphaZ/Alpha-z/php/profile.php') {
            header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php
            ');
            exit();
        }
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        // Redirect to a default page if HTTP_REFERER is not set
        header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
    }
    exit();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="stylesheet" type="text/css" href="../css/profile.css" />
	</head>
    
	<body>
        <?php
        $user_id = $_SESSION['user_id'];
        @ $db = new mysqli('localhost', 'root', '', 'alphaz');
        
        if ($db->connect_error) {
            $_SESSION['error'] = 'There was an error connecting to the database!';
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        
        $stmt = "SELECT * FROM user WHERE id = '$user_id'";
        $result = $db->query($stmt);
        
        if($result){
            $user = $result->fetch_assoc();
            $name = $user['name'];
            $email = $user['email'];
            $phone_number = $user['phone_number'];
            $address = $user['address'];
        } else {
            $_SESSION['error'] = 'There was an error getting your information!';
            header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
        }
        ?>
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
				<h1 id="profile_title">Hi, <?php echo $name; ?></h1>
				<br />
				<form method="post" action="update_profile.php">
					<table>
						<tr>
							<td>Name</td>
							<td><input class="editspace" name="name" readonly value="<?php echo $name; ?>"></td>
						</tr>
						<tr>
							<td>Email</td> 
                            <td><input class="editspace" name="email" readonly value="<?php echo $email; ?>"></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><input class="editspace" name="phoneNumber" readonly value="<?php echo $phone_number; ?>"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>
                            <textarea class="editspace" name="address" readonly><?php echo $address; ?></textarea>
							</td>
						</tr>
					</table>
					<br />
					<br />
					<br />
					<br />
					<button
						id="update_profile_button"
						type="button"
						onClick="makeEditable()"
					>
						Edit Profile
					</button>
					<button id="save_profile_button" type="submit" style="display: none">
						Save Profile
					</button>
					<button
						id="cancel_profile_button"
						type="button"
						onClick="makeUneditable()"
						style="display: none"
					>
						Cancel
					</button>
				</form>
			</div>
			<div id="footer"></div>
		</div>
	</body>
    <script src="../js/profile.js"></script>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>


