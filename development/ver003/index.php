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
$server_name="localhost";
$user_name="root";
$password="";
$db_name="northwind";
$conn=new  mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$query="SELECT customers.id,customers.company,customers.first_name,customers.last_name,customers.job_title FROM customers";
//$result=$conn->query($query);
//if($result->num_rows>0){
//    echo "<br><table class='table table-bordered' style='width:100%'>";
//    echo "  <tr><th>ID</th><th>Company</th> <th>FirstName</th><th>LastName</th><th>Job</th></tr>";
//    while ($row=$result->fetch_assoc()){
//        echo "  <tr><td>".$row['id']."</td><td>".$row['company']."</td> <td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['job_title']."</td></tr>";
//    }
//    echo "</table>";
//}else
//    echo "K co kq";
?>
    <br>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Job</th>
        </tr>
        <?php
        $result=$conn->query($query);
        if($result->num_rows>0){
            while ($row=$result->fetch_assoc()) {
                ?>
                <tr>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a> </td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>"><?php echo $row['company'] ?></a> </td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>"><?php echo $row['first_name'] ?></a> </td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>"><?php echo $row['last_name'] ?></a> </td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>"><?php echo $row['job_title'] ?></a> </td>
                    <td><a href="delete.php?id=<?php echo $row['id'] ?>"><?php echo "Delete" ?></a> </td>
                </tr>

                <?php
            }
        }
        $conn->close();
        ?>
    </table>
</div>
</body>
</html>
