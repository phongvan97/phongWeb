<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$server_name="localhost";
$user_name="root";
$password="";
$db_name="northwind";
$conn=new  mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['sub'])) {
    $sql = "INSERT INTO customers(company,first_name,last_name,job_title)VALUES ('" . $_POST['com'] . "','" . $_POST['first'] . "','" . $_POST['last'] . "','" . $_POST['job'] . "')";
    if ($conn->query($sql) === TRUE)
        echo "them thanh cong";
    else
        echo "them that bai";
}
$conn->close();
?>