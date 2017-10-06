<?php



// link connection page
include('connection.php');

//inserting code


$Emp_achievment= $_POST['Employee'];

$Achievement_Title = $_POST['Achievement_Title'];


$Achievement_Datae = $_POST['Achievement_Date'];
 

 


$squery = "insert into achievement (Employee ,Achievement_Title, Achievement_Date) VALUES
('$Emp_achievment','$Achievement_Title','$Achievement_Datae')";


if (mysqli_query($CONN, $squery))
{
//
    echo "successfully inserted";
    echo header('Location: http://localhost/employee/achievment.php'); ;


    # code..
}

else
{

    echo "Error in query";
}
mysqli_close($CONN);

?>
