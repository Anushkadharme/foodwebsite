<?php
$conn = new mysqli("localhost","root","","pizzahut");

if($conn->connect_error){
die("Connection failed");
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Orders</title>
<style>
body{
font-family: Arial;
background:#f5f5f5;
}

h2{
text-align:center;
}

table{
width:90%;
margin:auto;
border-collapse:collapse;
background:white;
}

th, td{
padding:10px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#ff4d4d;
color:white;
}
</style>
</head>

<body>

<h2>All Orders</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>Food</th>
<th>Payment</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['phone']."</td>
<td>".$row['address']."</td>
<td>".$row['food']."</td>
<td>".$row['payment']."</td>
</tr>";
}
?>

</table>

</body>
</html>