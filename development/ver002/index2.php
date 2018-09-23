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
    <form name="aaa" action="process.php" method="post">
        <div class="form-group">
            <label for="company">Your Company</label>
            <input type="text" name="com" id="company" class="form-control">
        </div>
        <div class="form-group">
            <label for="first">Your FirstName</label>
            <input type="text" name="first" id="first" class="form-control">
        </div>
        <div class="form-group">
            <label for="last">Your LastName</label>
            <input type="text" name="last" id="last" class="form-control">
        </div>
        <div class="form-group">
            <label for="job">Your Job</label>
            <input type="text" name="job" id="job" class="form-control">
        </div>
        <button type="submit"name="sub" class="btn btn-default">Add</button>
    </form>


</div>
</body>
</html>