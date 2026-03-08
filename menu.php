<?php
include "db.php";

$result = $conn->query("SELECT * FROM pizza");

echo "<h2>Pizza Menu</h2>";

while($row = $result->fetch_assoc()){
?>

<form action="order.php" method="POST">
<?php echo $row['name']; ?> - ₹<?php echo $row['price']; ?>

<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">

<button type="submit">Order</button>
</form>
<br>

<?php } ?>