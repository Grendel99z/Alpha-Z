<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    // Database connection settings
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'alphaz';

    // Create a database connection
    $db = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($db->connect_error) {
        echo 'Error: Could not connect to the database. Please try again later.';
        exit();
    }

    // Insert the user input into the database
    $insertQuery = "INSERT INTO feedback (name, email, comments) VALUES ('$name', '$email', '$comments')";

    if ($db->query($insertQuery)) {	
		echo "<script>alert('Feedback submitted!')</script>";
    } else {
        echo "Error: " . $db->error;
    }

    // Close the database connection
    $db->close();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/contact.css" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header">
				<?php
					include_once 'components/header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'components/sidePane.php';
					?>
			</div>
			<div id="body">
			<div id="toprightofcontact">
					"AT ALPHA Z, WE DO OUR<br />
					BEST TO SATISFY EVERY<br />
					CUSTOMER"
				</div>

				<div id="contactdetails">
					<h1>Contact Us</h1>
					<br /><br />

					<div id="colourcontact">
						<p>
							Visit Us
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact
						</p>
					</div>
					<p>
						1 Nanyang Walk
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AlphaZ@Alpha.com
					</p>
					<p>
						Singapore 637616
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+6512345678
					</p>

					<br /><br />
				</div>

				<div id="topofcontact">
					<label><h1>FAQs</h1></label> <br /><br />
					Q: How long does it take for my order to be delivered? <br />
					A: It usually takes about 2-3 business days before you receive your
					order.<br /><br />

					Q: How much is the minimum amount to qualify for free delivery fee?<br />
					A: Spend a minimum of $150 to qualify for the free delivery.<br /><br />

					Q: How long is the warranty period for my item?<br />
					A: All our products have a warranty period of 3 years.

					<br /><br /><br /><br />
				</div>

				<div id="furtherquestions">
					<label><h1>Further Questions?</h1></label> <br /><br />

					<div id="furthertext">
						If you have any further queries or if you feel there are areas<br> where we can make improvements,
						we kindly request that<br>you take a moment to fill out the feedback form below. We greatly appreciate our customers' feedback.
					</div>
					<br /><br />
					<div id="feedbackform">
						<form action="contact.php" method="post" id="feedback-form">
							<fieldset><legend>Customer Information</legend>
							<table class="contact">
								<tr class="contact-item">
									<td class="item-name">
										<label for="name">*Name:</label>
									</td>
									<td class="input-field">
										<input type="text" name="name" id="name" size="50" required placeholder = "Enter your name here"/>
										<br />
										<span class="error" id="error-name"></span>
									</td>
								</tr>

								<tr class="contact-item">
									<td class="item-name">
										<label for="email">*E-mail:</label>
									</td>
									<td class="input-field">
										<input type="email" name="email" id="email" size="50" required placeholder = "Enter your email address here" />
										<br />
										<span class="error" id="error-email"></span>
									</td>
								</tr>

								<tr class="contact-item">
									<td class="item-name">
										<label for="experience">*Comments</label>
									</td>
									<td class="input-field">
										<textarea
											name="comments"
											id="comments"
											rows="5"
											cols="50"
										    width="150%"
											required placeholder="Enter your comments here"
										></textarea>
										<br />
										<span class="error" id="error-com"></span>
									</td>
								</tr>
							</table>

							<br />

							<div id="feedbackbutton">
								<input type="submit" value="Submit" id="submit-btn" />
								<br />
								<span class="error" id="error-form"></span>
							</div></fieldset>
						</form>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>