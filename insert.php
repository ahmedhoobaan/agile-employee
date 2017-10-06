<?php



// link connection page
include('connection.php');

//inserting code

$First_name1 = $_POST['First_name'];






$Address1 = $_POST['Address'];

$Qualification = $_POST['Qualification'];


$City1 = $_POST['City'];

$Dob = $_POST['dateofbirth'];

$Contact1 = $_POST['Contact'];


$Zip1 = $_POST['Zip'];


$squery = "insert into femployee_table(F_name, Address, qualification,DOB, city, contact_no ,zip) VALUES
('$First_name1','$Address1','$Qualification' , '$Dob' ,'$City1','$Contact1','$Zip1')";


if (mysqli_query($CONN, $squery))
{
//
    echo "successfully inserted";
echo header('Location: http://localhost/employee/employee.php/'); ;


    # code..
}

else
{

    echo "Error in query";
}
mysqli_close($CONN);

?>
