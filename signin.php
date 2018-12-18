<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title <b>Welcome to Gotocosmetics.com!</b></title>
</head>
</head>
<body style="background-color:powderblue;">

<?php
	
	// Retrieve Post Data
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
 
		 // Set the session information
		 session_start();  
		 $_SESSION['appusername'] = $username; 
		 setcookie('appusername','$username', time() + (60 * 30));
		 $_SESSION['appemail'] = $email;
		 setcookie('appemail','$email', time() + (60 * 30));
		 $_SESSION['apppassword'] = $password;
		 setcookie('apppassword','$password', time() + (60 * 30));

		 
		 if(isset($_COOKIE['appusername']) && $_COOKIE['appemail'] && $_COOKIE['apppassword'] == true)
		{ 
		echo "<h1> Hello ".ucfirst($username). ", you have successfully logged in to Gotocosmetics.com.<br><br>Happy Shopping!</h1>";
		}   
else
	echo 'Please refresh';

		 ?>
		 
<p style="color: red"align="center"> We offer a wide range of cosmetics, from eyeshadow to blush to eyebrow wax, we've got it all!</p>
<p> <center>Check out our 2018 list of BestSellers:</center></p>
<form action="addtocart.php" method="post" name="forminfo">

<?php
//put products into array with items,prices,and pics
	$products=array(
				'Item1' =>array(
					"item"=>"<b>URBAN DECAY Born to Run Eyeshadow Palette",
					"price"=>"$49.00",
					"picture"=>" <img src='borntorun.jpg' alt='urbandecay''width='250'height='150' />",
				),
				'Item2' =>array(
					"item"=>"<b>HUDA BEAUTY Obsessions Eyeshadow Palette",
					"price"=>"$27.00",
					"picture"=>" <img src='hudabeauty.jpg' alt='huda''width='250'height='150' />",
			
					),
				'Item3' =>array(
					"item"=>"<b>NARS Radient Creamy Concealer",
					"price"=>"$30.00",
					"picture"=>" <img src='narsconcealer.jpg' alt='nars''width='250'height='150' />",
			
					),
				'Item4' =>array(
					"item"=>"<b>MAKE UP FOR EVER Ultra HD Invisible Cover Foundation",
					"price"=>"$43.00",
					"picture"=>" <img src='makeupforever.jpg' alt='makeupforever''width='250'height='150' />",
			
					),
				'Item5' =>array(
					"item"=>"<b>ANASTASIA BEVERLY HILLS Brow Wiz",
					"price"=>"$21.00",
					"picture"=>" <img src='browwiz.jpg' alt='abh''width='250'height='150' />",
						
					),
				'Item6' =>array(
					"item"=>"<b>FENTY BEAUTY BY RIHANNA Gloss Bomb Universal Lip Luminizer",
					"price"=>"$18.00",
					"picture"=>" <img src='fenty.jpg' alt='rihanna''width='250'height='150' />",
				
					),
				'Item7' =>array(
					"item"=>"<b>ESTEE LAUDER Double Wear Stay-In-Place Makeup",
					"price"=>"$42.00",
					"picture"=>" <img src='esteelauder.jpg' alt='esteelauder''width='250'height='150' />",
					
					),
				'Item8' =>array(
					"item"=>"<b>BECCA Shimmering Skin Perfector Pressed Highlighter",
					"price"=>"$38.00",
					"picture"=>" <img src='becca.jpg' alt='becca''width='250'height='150' />",
					
					),
				'Item9' =>array(
					"item"=>"<b>BENEFIT COSMETICS The POREfessional Face Primer",
					"price"=>"$31.00",
					"picture"=>" <img src='porefessional.jpg' alt='borntorun''width='250'height='150' />",
					
					),
				'Item10' =>array(
					"item"=>"<b>MILK MAKEUP Watermelon Brightening Serum",
					"price"=>"$36.00",
					"picture"=>" <img src='milk.jpg' alt='milk''width='250'height='150' />",
					),
					);
					
//making a cart array					
if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array ();
// Add
if (isset ( $_POST ["addtocart"] )) {
    // Check the item is not already in the cart
    if (!in_array($_POST ["addtocart"], $_SESSION['cart'])) {
        // Add new item to cart
        $_SESSION ['cart'][] = $_POST["addtocart"];
    }
}
}
//displaying products in table
foreach ($products as $key => $product) {
echo '<table padding: 15px>';
echo '<tr><td>' . $product['item'] . '</td></tr>';
echo '<tr><td>' .$product['price'] . '</td></tr>';
echo '<tr><td>' .$product['picture'] . '</td></tr>';
echo "<tr><td><input name='addtocart' type='submit' value='Add to Cart'></form></td></tr><br>";
echo '</table><br><br><br><br>';
}


// Provide a button to logout
echo "<br><br><br><form name='logout' method='post' action='logout.php'> 
<input name='submitbtn' type='submit' value='Logout'> 
</form>";	  
	
?>
</body>
</html>