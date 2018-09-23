<?php
echo __FILE__.$_GET['id'];
require_once ('connect.php');
$query="DELETE FROM customers WHERE id=".$_GET['id'];
$conn->query($query);
header("Location: http://phongweb.com/")
?>