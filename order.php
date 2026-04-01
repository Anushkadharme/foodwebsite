<?php

header("Location: view_orders.php");
$conn = new mysqli("localhost","root","","pizzahut");

if($conn->connect_error){
die("Connection failed");
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$food = $_POST['food'];
$payment = $_POST['payment'];

$sql = "INSERT INTO orders (name, phone, address, food, payment)
VALUES ('$name','$phone','$address','$food','$payment')";

if($conn->query($sql) === TRUE){
echo "Order Placed Successfully";
}else{
echo "Error";
}

$conn->close();

?>