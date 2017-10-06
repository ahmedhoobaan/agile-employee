<!DOCTYPE html>
<html lang="en">
<head>






    <link rel="stylesheet" href="style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employee
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="employee.php"s>Add employee</a>
                    <a class="dropdown-item" href="emplist.php">Employee </a>

                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="achievment.php">Achievmets <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="transfer.php">transfer <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

        </ul>
    </div>

    <?php

$servername="localhost";
$serveruser="root";
$dbpwd="";
$dbname="employee";

$CONN = mysqli_connect($servername, $serveruser, $dbpwd , $dbname );
$query ="SELECT * FROM  femployee_table";
$result1 = mysqli_query($CONN,$query);

?>

</nav>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<div style="margin-top:50px;background-color:darkcyan;margin-left:300px;margin-right:300px">
    <form action="achivement_insert.php" method="POST" class="container" id="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-8 mb-3" style="padding-left: 80px">
                <label for="second_name">Employee</label>
                <input type="text" name="Employee"  class="form-control" id="Employee" placeholder="Employee"   required>
            </div>


         
            <div class="col-md-8 mb-3"  style="padding-left: 80px">
                <label for="Qualification">Employee Transfer </label>
                <select name="Employee_Transfer" id="Employee_Transfer" class="form-control" style=" #Employee_Transfer:hover; background-color: blanchedalmond;">

                    <?php while($row1 = mysqli_fetch_array($result1)):?>
                        <option> <?php echo $row1[1];?> </option>

                    <?php endwhile;?>

                </select>
            </div>




            <div class="col-md-8 mb-3"  style="padding-left:80px">
                <label for="Achievement_Title"> Achievement Title </label>
                <input type="text" name="Achievement_Title " class="form-control" id="Achievement_Title" placeholder="Achievement Title"  required>
            </div>



            <div class="col-md-8 mb-3"  style="padding-left:80px">
                <label for="Achievement_Date"> Achievement Date </label>
                <input type="text" name="Achievement_Date" class="form-control" id="Achievement_Date" placeholder="Address"  required>
            </div>











        </div>
        <input type="submit" class="btn btn-primary" value="submit">
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            "use strict";
            window.addEventListener("load", function() {
                var form = document.getElementById("needs-validation");
                form.addEventListener("submit", function(event) {
                    if (form.checkValidity() == false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                }, false);
            }, false);
        }());
    </script>


</div>






</body>
</html>