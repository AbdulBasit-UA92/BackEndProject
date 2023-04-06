<!DOCTYPE html>
<html>

<head>
    <title>RISHTON ACADEMY - LOGIN</title>
    <link rel="icon" href="pictures/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</head>

<body>

<?php
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student86-353031354ff6", "ua92-studentAc", "student86-353031354ff6");
if ($link === false) {
    die("Connection failed: ");
}
?>

    
        <form method="post" action="test.php">

        <input class="btn btn-success" type="submit" name="submit">

</form>



<?php
if (isset($_POST['submit'])) {

    echo "<script type='text/javascript'>window.top.location='http://swiftwebhost.co.uk/ua92-b4/39095992/backendproject/Admin.html';</script>"; exit;


}

?>    

</body>

</html>