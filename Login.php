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

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0%;
            background-image: url(pictures/loginback.jpg);   
            background-repeat: repeat-y;
            background-size: cover;   
        }

        .center {
            margin: auto;
            width: 50%;
            height: 50%;
            padding: 10px;
            margin-top: 10%;
            text-align: center;
            /* background-color: #ffbcb5; */
            background-color: rgb(252, 254, 122);
            border-radius: 20px;
        }

        .input {
            margin: auto;
            border-radius: 50px;
            width: 50%;
            background-color: rgb(255, 255, 215);
            border-style: none;
        }

        .input img {
            width: 40px;
        }

        .input input {
            border-radius: 50px;
            width: 83%;
            height: 50px;
            background-color: rgb(255, 255, 215);
            border-style: none;
        }

        .btn {
            width: 50%;
            height: 50px;
            border-radius: 50px;
            margin:20px;
        }
    </style>
</head>

<body>

<?php
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student86-353031354ff6", "ua92-studentAc", "student86-353031354ff6");
if ($link === false) {
    die("Connection failed: ");
}
?>

    <div class="center">
        <form method="post" action="Login.php">
            <h1 style="font-weight:bolder;">LOGIN</h1>
            <br>

            <div class="input">
                <img src="pictures/email.png" alt="Email">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <br>

            <div class="input">
                <img src="pictures/password.png" alt="Password">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <input class="btn btn-success" type="submit" name="submit">


        </form>
    </div>




<?php
if (isset($_POST['submit'])) {

    $sql = mysqli_query($link, "SELECT username, password FROM Login");
    $row = $sql->fetch_assoc();

    $username = $row['username'];
    $password = $row['password'];

    if($username == $_POST['username'] && $password == $_POST['password'])
    {
        echo "<script type='text/javascript'>window.top.location='http://swiftwebhost.co.uk/ua92-b4/39095992/backendproject/Admin.html';</script>"; 
        exit;
    }
    else{
        echo '<script type="text/javascript">
      window.onload = function () { alert("ENTERED USERNAME OR PASSWORD IS INCORRECT"); } 
      </script>';
    }

}

?>    

</body>

</html>