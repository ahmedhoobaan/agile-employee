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

<?php

include('connection.php');

$query ="select*from femployee_table";

$restults = mysqli_query($CONN,$query);

?>



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
                    <a class="dropdown-item" href="employee.php">Add employee</a>
                    <a class="dropdown-item" href="emplist.php">Employee list </a>

                </div>

            <li class="nav-item active">
                <a class="nav-link" href="achievment.php"> Achievement <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="transfer.php">transfer <span class="sr-only">(current)</span></a>
            </li>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

        </ul>
    </div>
</nav>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<div class="col-sn-9" style="margin-left:100px;margin-right:100px; padding-bottom:30px; background-color:wheat ;  ">
    <table class="table" id="xxl">
        <thead>
        <tr>
            <th>First name </th>
            <th>Second name</th>

            <th> City </th>
            <th> Contact  </th>




        </thead>
        <tbody>

        <?php

        while($row=mysqli_fetch_assoc($restults)) {


            ?>
            <tr>


                <td> <?PHP echo $row['F_name']?> </td>
                <td> <?PHP echo $row['city']?> </td>
                <td> <?PHP echo $row['contact_no']?> </td>

                <td >
                    <a href="#" class="btn btn-success" role="button">Edit </a>
                    <a href="#" class="btn btn-danger" role="button">delete </a>
                </td>
            </tr>

            <?php
        }

        mysqli_close($CONN);
        ?>
        </tbody>

    </table>
</div>

</div>


</div>

</body>
</html>