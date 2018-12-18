<?php
session_start();
// Set a default total
$total = 0;
foreach ($_SESSION ["cart"] as $items ) {
   
echo"<tr><td>";
 echo" Name: ". $products[$items]['item'];
 echo "   </td> <td>";
 echo "Price:". $products[$items]['price']; 
    echo"</td><td></tr>";
    $total += $products[$items]['price'];
} // end foreach

echo "Total: $". $total;
?>
















<?php 
 //session_start();
// $cart= $_POST['appcart'];
 //if (empty ($_SESSION['cart'])){
//	 $_SESSION['cart']=array();
 //}
 //array_push($_SESSION['cart'],$_POST['appcart']);
 
 //if(isset($_SESSION['cart'])){
 //   Loop through it like any other array.
 //  foreach($_SESSION['cart'] as $items){
 //      //Print out the product ID.
  //     print json_encode($items); 
	//   }
//}

  ?>