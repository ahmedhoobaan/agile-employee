<?php

if($_POST) {
    $servername = "localhost";
    $serveruser = "root";
    $dbpwd = "";
    $dbname = "employee";

    $username=$_POST['username'];
    $password=$_POST['password'];


    $CONN = mysqli_connect($servername, $serveruser, $dbpwd, $dbname);


    $query ="select * from employee_user where Em_user='$username' and Em_pass='$password'";

    $result = mysqli_query($CONN,$query);
    if(mysqli_num_rows($result )==1)
    {
        session_start();
        $_SESSION['employee_user']='true';


        header('location:employee.php');

    }
    else
    {
        echo "username or password incorrect";
    }
}


?>

<html>
<head>

    <title> login </title>
</head>
<body>

<form method="POST">
      <label> username </label>
    <input type="text" name="username">

    <label> password </label>
    <input type="text" name="password">

    <input type="submit" value="login">


</form>

</body>

</html>
