<!DOCTYPE html>
<html>

<head>
    <title>RISHTON ACADEMY - ADD STUDENTS</title>
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
      background-image: url(pictures/adminback.jpg);   
      background-repeat: repeat-y;
      background-size: cover;  
      color: white;
      text-align: center;
    }

    .navbar {
      overflow: visible;
      background-color:  transparent;
      position: relative;
      width: 100%;
      top: 0;
      background-color:  transparent;
      border: none;
    }

    .collapse {
      margin-top: 20px;
    }

    .nav{
      padding-left: 30px;
    }

    .nav button {
      background-color: transparent;
      border: none;
      padding: 14px 16px;
    }

    .nav button a{
      font-size: 20px;
      color: white;
      background-color: transparent;
      border: none;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .nav button:hover {
      background-color: #ff8000;
    }

    .dropdown .dropdown-toggle {
      font-size: 20px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }


    .dropdown-menu {
      display: none;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-menu a {
      float: none;
      color: black;
      text-decoration: none;
      display: block;
      text-align: left;
      font-size: large;
    }

    .dropdown-menu a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    .dropdown-item {
      height: 33px;

    }

    .dropdown-menu .dropdown-item:hover {
      background-color: #ffbd7b;
    }

    .footer {
      background-color: #391847;
      left: 0;
      bottom: 0;
      width: 100%;
    }

    .maindiv{
      margin-top: 10px;
      margin-left: 10%;
      height: 180px;
    }

    .maindiv1{
      margin-top: 30px;
      margin-left: 10%;
      height: 250px;
    }

    .data {
      width: 240px;
      height: 150px;
      border: #ffdcb9;
      border-style: solid;
      margin: 10px;
      float: left;
      color: white;
      border-radius: 10px;
      background-color: #ff8000;
      transition: 300ms;
    }

    .data:hover{
      background-color: blanchedalmond;
      width: 280px;
      height: 160px;
      color: black;
    }

    table {
      width: 100%;
      font-size: larger;
      background-color: #ff8000;
      border-radius: 10px;
    }

    table td {
      width: 50%;
      text-align: left;
      padding: 10px;  
      color: black;

    }
     
    .input input {
      width: 80%;
      color: black;
      border-radius: 5px;
      border: #ffd4aa solid;
      padding-left: 10px;
    }

    .input select {
      width: 80%;
      color: black;
      border-radius: 5px;
      border: #ffd4aa solid;
      padding-left: 10px;
    }

    .btn-success{
      width: 50%;
      margin-left: 68%;
      margin-top: 5%;
    }
  </style>
</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="Admin.html"><img src="pictures/logo1.png" alt="logo" width="400px" height="100px"></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li>
            <button class="btn btn-primary"><a href="Admin.html">Home</a></button>
          </li>


          <li class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-mdb-toggle="dropdown" aria-expanded="false">View <span class="fa fa-caret-down"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="ViewStudent.php">Student</a></li>
              <li><a class="dropdown-item" href="ViewParent.php">Parent</a></li>
              <li><a class="dropdown-item" href="ViewTeacher.php">Teacher</a></li>
              <li><a class="dropdown-item" href="ViewClass.php">Class</a></li>
              <li><a class="dropdown-item" href="ViewStudentParent.php">Student/Parent</a></li>
              <li><a class="dropdown-item" href="ViewLibrary.php">Library</a></li>
              <li><a class="dropdown-item" href="ViewAssistants.php">Assistants</a></li>
              <li><a class="dropdown-item" href="ViewSalary.php">Salary</a></li>
              <li><a class="dropdown-item" href="ViewDinnerMoney.php">DinnerMoney</a></li>
              <li><a class="dropdown-item" href="ViewAttendance.php">Attendance</a></li>
            </ul>
          </li> 


          <li class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-mdb-toggle="dropdown" aria-expanded="false">Add <span class="fa fa-caret-down"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="AddStudent.php">Student</a></li>
              <li><a class="dropdown-item" href="AddParent.php">Parent</a></li>
              <li><a class="dropdown-item" href="AddTeacher.php">Teacher</a></li>
              <li><a class="dropdown-item" href="AddClass.php">Class</a></li>
              <li><a class="dropdown-item" href="StudentParent.php">Student/Parent</a></li>
              <li><a class="dropdown-item" href="AddLibrary.php">Library</a></li>
              <li><a class="dropdown-item" href="AddAssistants.php">Assistants</a></li>
              <li><a class="dropdown-item" href="AddSalary.php">Salary</a></li>
              <li><a class="dropdown-item" href="AddDinnerMoney.php">DinnerMoney</a></li>
              <li><a class="dropdown-item" href="AddAttendance.php">Attendance</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-mdb-toggle="dropdown" aria-expanded="false">Update <span class="fa fa-caret-down"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="UpdateStudent.php">Student</a></li>
              <li><a class="dropdown-item" href="UpdateParent.php">Parent</a></li>
              <li><a class="dropdown-item" href="UpdateTeacher.php">Teacher</a></li>
              <li><a class="dropdown-item" href="UpdateClass.php">Class</a></li>
              <li><a class="dropdown-item" href="UpdateStudentParent.php">Student/Parent</a></li>
              <li><a class="dropdown-item" href="UpdateLibrary.php">Library</a></li>
              <li><a class="dropdown-item" href="UpdateAssistants.php">Assistants</a></li>
              <li><a class="dropdown-item" href="UpdateSalary.php">Salary</a></li>
              <li><a class="dropdown-item" href="UpdateDinnerMoney.php">DinnerMoney</a></li>
              <li><a class="dropdown-item" href="UpdateAttendance.php">Attendance</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-mdb-toggle="dropdown" aria-expanded="false">Delete <span class="fa fa-caret-down"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="DeleteStudent.php">Student</a></li>
              <li><a class="dropdown-item" href="DeleteParent.php">Parent</a></li>
              <li><a class="dropdown-item" href="DeleteTeacher.php">Teacher</a></li>
              <li><a class="dropdown-item" href="DeleteClass.php">Class</a></li>
              <li><a class="dropdown-item" href="DeleteStudentParent.php">Student/Parent</a></li>
              <li><a class="dropdown-item" href="DeleteLibrary.php">Library</a></li>
              <li><a class="dropdown-item" href="DeleteAssistants.php">Assistants</a></li>
              <li><a class="dropdown-item" href="DeleteSalary.php">Salary</a></li>
              <li><a class="dropdown-item" href="DeleteDinnerMoney.php">DinnerMoney</a></li>
              <li><a class="dropdown-item" href="DeleteAttendance.php">Attendance-</a></li>
            </ul>
          </li>

          <li><button class="btn btn-primary" style="background-color: #ff8000; margin-left: 10px;"><a href="Login.php">LOGOUT</a></button></li>
        </ul>
      </div>

  </nav>


<?php
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student86-353031354ff6", "ua92-studentAc", "student86-353031354ff6");
if ($link === false) {
    die("Connection failed: ");
}
  $sqla = "SELECT ClassID FROM Class";
  $class = mysqli_query($link, $sqla);

  $sqlb = "SELECT TeacherID FROM Teachers";
  $teacher = mysqli_query($link, $sqlb);

  $sqlc = "SELECT LibraryID FROM Library";
  $library = mysqli_query($link, $sqlc);
?>


  <hr> <h1>ADD STUDENT</h1> <hr>

        <table >
          <form method="post" action="AddStudent.php">
            <tr class="input">
              <td>
                <label for="studentName">Student Name:</label><br>
                <input type="text" name="studentName" placeholder="Student Name" pattern="[A-Za-z ]{1,255}" required>
              </td>
              <td>
                <label for="address">Address:</label><br>
                <input type="text" name="address" placeholder="Address" required>
              </td> 
            </tr>

            <tr class="input">
              <td>
                <label for="gender">Gender:</label><br>
                <select name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </td>
              <td>
                <label for="DOB">Date of Birth:</label><br>
                <input type="date" name="DOB" required>
              </td>
            </tr>

            <tr class="input">
            
              <td>
                <label for="medical">Medical Information:</label><br>
                <input type="text" name="medical" placeholder="Medical Information" required>
              </td>

            <td>
              <label for="classid">Class ID:</label><br>
              <select name="classid">
              <?php
                while ($row = mysqli_fetch_array(
                        $class,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $row["ClassID"];?>">
                <?php echo $row["ClassID"];?>
                </option>
              <?php
              endwhile;
              ?>
             </select>
            </td>
            </tr>

            <tr class="input">
            
            <td>
              <label for="teacherid">Teacher ID:</label><br>
              <select name="teacherid">
              <?php
                while ($row = mysqli_fetch_array(
                        $teacher,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $row["TeacherID"];?>">
                <?php echo $row["TeacherID"];?>
                </option>
              <?php
              endwhile;
              ?>
             </select>
            </td>

            <td>
              <label for="libraryid">Library ID:</label><br>
              <select name="libraryid">
              <?php
                while ($row = mysqli_fetch_array(
                        $library,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $row["LibraryID"];?>">
                <?php echo $row["LibraryID"];?>
                </option>
              <?php
              endwhile;
              ?>
             </select>
            </td>
            </tr>

            <tr>
              <td><input class="btn btn-success" type="submit" name="submit"></td>              
            </tr>
        
          </form>
        
          
<?php
if (isset($_POST['submit'])) {

    $name = $_POST['studentName'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $medical = $_POST['medical'];
    $classid = $_POST['classid'];
    $teacherid = $_POST['teacherid'];
    $libraryid = $_POST['libraryid'];
   
    $sql = "INSERT INTO Students (Name,Address,Gender,DOB,Medical_inf,ClassID,TeacherID,LibraryID) VALUES ('$name','$address','$gender','$DOB','$medical','$classid','$teacherid','$libraryid')";
    if (mysqli_query($link, $sql)) {
      echo '<script type="text/javascript">
      window.onload = function () { alert("RECORD CREATED SUCCESSFULLY"); } 
      </script>';
    } else {
      echo '<script type="text/javascript">
      window.onload = function () { alert("ERROR ADDING RECORD"); } 
      </script>';
    }

}

?>
        
        </table>
        </div>
    </body>
</html>

