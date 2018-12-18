<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Form Login</title>
</head>
<body style="background-color:powderblue;">

<?php
session_start();
session_destroy();
setcookie('appusername','$username', time()-(60*30));
setcookie('appemail','email',time()-(60*30));
// Display the Session information
		 if(isset($_COOKIE['appusername']) && $_COOKIE['appemail'] == true)
		{ 
		echo "<h1> Thank you for shopping with us!<br>You have successfully logged out of Gotocosmetics.com.<br><br>Hope to see you again soon!</h1>";
		}   
else
	echo 'Please logout';
?>
</body>
</html>
