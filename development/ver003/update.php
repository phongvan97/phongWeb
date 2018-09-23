<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<?php
$id=$_GET['id'];

$server_name="localhost";
$user_name="root";
$password="";
$db_name="northwind";
$conn=new  mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$query="SELECT customers.id,customers.company,customers.first_name,customers.last_name,customers.job_title FROM customers WHERE id=".$id;
$result=$conn->query($query);
if($result->num_rows>0)
    $row=$result->fetch_assoc();
?>
    <form name="aaa" action="" method="post">
        <div class="form-group">
            <label for="company">Your Company</label>
            <input type="text" name="com" id="company" value="<?php echo $row['company']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="first">Your FirstName</label>
            <input type="text" name="first" id="first" value="<?php echo $row['first_name']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="last">Your LastName</label>
            <input type="text" name="last" id="last" value="<?php echo $row['last_name']?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="job">Your Job</label>
            <input type="text" name="job" id="job" value="<?php echo $row['job_title']?>" class="form-control">
        </div>
        <button type="submit"name="subb" class="btn btn-default">Update</button>
    </form>
</div>
<?php
if(isset($_POST['subb'])){
    $query="UPDATE customers SET	first_name ='".$_POST['first']."',company='".$_POST['company']."',last_name='".$_POST['last']."',job_title='".$_POST['job_title']."' WHERE id=".$id;
}
$conn->close();
?>
</body>
</html>

