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
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
			$role = $user['role'];
        } else {
            $_SESSION['error'] = 'There was an error getting your information!';
            header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
        }
		$db->close();

		@ $db = new mysqli('localhost', 'root', '', 'alphaz');
		if ($db->connect_error) {
            $_SESSION['error'] = 'There was an error connecting to the database!';
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
		$stmt = "SELECT * FROM records GROUP BY date";
		$transactions = $db->query($stmt);

        ?>
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
				<h1 id="profile_title">Hi, <?php echo $name; ?></h1>
				<br />
				<form method="post" action="server/update_profile.php">
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
				<div id="transactionDetails">
					<!-- Transaction History for user-->
				</div>
				<div id="adminProductsChange" style="display:<?php echo $role == 'admin' ? '': 'none' ?>">
					<div style="display:flex;align-items:center;gap:20px;">
					<label class="toggleButton">
						<input id="toggleButtonproductsChangeContent" onChange="toggleDiv('productsChangeContent')" type="checkbox">
						<span class="slider"></span>
					</label>
					<label style="font-size:20px">Products Customization field</label>
				</div>
				<div id="productsChangeContent" style="display:none">
					<h1>Products</h1>
						<table>
							<tr>
								<th>Type</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
							</tr>
						<?php
							@ $db = new mysqli('localhost', 'root', '', 'alphaz');
							if ($db->connect_error) {
								$_SESSION['error'] = 'There was an error connecting to the database!';
								header('Location: '.$_SERVER['HTTP_REFERER']);
							}
							$stmt = "SELECT * FROM products ORDER BY type";
							$products = $db->query($stmt);
							foreach ($products as $product) {
								echo '<form action="server/update_product.php?id='.$product['id'].'" method="post">';
								echo '<tr>';
								echo '<td>'.$product['type'].'</td>';
								echo '<td>'.$product['name'].'</td>';
								echo '<td><input class="editableProduct" id="editableProduct'.$product['id'].'" name="price" readonly value='.$product['price'].'></td>';
								echo '<td><input class="editableProduct" id="editableProduct'.$product['id'].'" name="quantity" readonly value='.$product['quantity'].'></td>';
								echo '<td><button class="updateProductButton" id="updateProductButton'.$product['id'].'" type="button" onClick="makeProductEditable('.$product['id'].')">Update</button></td>';
								echo '<td><button class="saveProductButton" style="display:none" id="saveProductButton'.$product['id'].'" type="submit">Save</button></td>';
								echo '<td><button class="cancelProductButton" style="display:none" id="cancelProductButton'.$product['id'].'" type="button" onClick="makeProductUneditable('.$product['id'].')">Cancel</button></td>';
								echo '</tr>';
								echo '</form>';
							}
						?>
						</table>
						<!-- <button><a href="addProduct.php">Add Product</a></button> -->
						</div>
				</div>
				<div id="adminTransactions" style="display:<?php echo $role == 'admin' ? '': 'none' ?>">
					<div style="display:flex;align-items:center;gap:20px;">
						<label class="toggleButton">
							<input id="toggleButtontransactionsContent" onChange="toggleDiv('transactionsContent')" type="checkbox">
							<span class="slider"></span>
						</label>
						<label style="font-size:20px">View Transactions field</label>
					</div>
					<div id="transactionsContent" style="display:none">
					<h1>Transactions</h1>
					<table>
						<tr>
							<th>Date</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					<?php 
						foreach ($transactions as $transaction) {
							echo '<tr>';
							echo '<td class="tableDate" colspan="4">'.$transaction['date'].'</td>';
							echo '</tr>';
							$date = $transaction['date'];
							$stmt = "SELECT * FROM records WHERE date = '$date'";
							$transactionDetails = $db->query($stmt);
							$total = 0;
							foreach ($transactionDetails as $transactionDetail) {
								$total += $transactionDetail['price'];
								echo '<tr>';
								echo '<td></td>';
								echo '<td>'.$transactionDetail['name'].'</td>';
								echo '<td>'.$transactionDetail['quantity'].'</td>';
								echo '<td>'.$transactionDetail['price'].'</td>';
								echo '</tr>';
							}
							echo '<tr class="totalTransaction">';
							echo '<td class="totalTransaction" colspan="3">Total</td>';
							echo '<td class="totalTransaction">'.$total.'</td>';
							echo '</tr>';
						}
					?>
					<!-- all transactions for admin -->
					</table>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
    <script src="../js/profile.js"></script>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>


