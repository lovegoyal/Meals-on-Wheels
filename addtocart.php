<?php
session_start();
if(isset($_SESSION['cart']) & !empty($_SESSION['cart']))
{
	$items = $_SESSION['cart'];
	$cartitems = explode(",", $items);
	$items .= "," . $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: indexnew.php?status=success');
}else{
	$items = $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: indexnew.php?status=success');
}
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
if(in_array($_GET['id'], $cartitems)){
	header('location: indexnew.php?status=incart');
}else{
	$items .= "," . $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: indexnew.php?status=success');
	
}
?>