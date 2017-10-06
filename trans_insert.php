<?php




include('connection.php');

$emp_transfer= $_POST['Employee_Transfer'];

$emp_date = $_POST['Transfer_date'];

$emp_station = $_POST['Transfer_station'];

$emp_Department = $_POST['Transfer_Department'];



$squery = "insert into employee_trans(Emp_transfer, trans_date, trans_departement,TransferToStation) VALUES
('$emp_transfer','$emp_date','$emp_station' , '$emp_Department')";


if (mysqli_query($CONN, $squery))
{

    echo "successfully inserted";
    echo header('Location: http://localhost/employee/transfer.php/'); ;

}

else
{

    echo "Error in query";
}
mysqli_close($CONN);

?>
