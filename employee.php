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
  <a class="navbar-brand" href="#">Employee</a>
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


        <li class="nav-item active">
            <a class="nav-link" href="achievment.php">Achievement <span class="sr-only">(current)</span></a>
        </li>




        <li class="nav-item active">
            <a class="nav-link" href="transfer.php">Transfer <span class="sr-only">(current)</span></a>
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
      
      
      




      <div style="margin-top:50px;background-color:cadetblue;margin-left:300px;margin-right:300px">
          <form action="insert.php" method="POST" class="container" id="needs-validation" novalidate>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="second_name">First name</label>
                      <input type="text" name="First_name"  class="form-control" id="First_name" placeholder="First name"   required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="secend_name">Second name</label>
                      <input type="text" name="secend_name" class="form-control" id="secend_name" placeholder="second name"  required>
                  </div>


                  <div class="col-md-6 mb-3">
                      <label for="validationCustom02">Last name</label>
                      <input type="text" name="Last_name" class="form-control" id="Last_name" placeholder="Last name"   required>
                  </div>


                  <div class="col-md-6 mb-3">
                      <label for="Address">Address</label>
                      <input type="text" name="Address" class="form-control" id="Address" placeholder="Address"  required>
                  </div>




                  <div class="col-md-6 mb-3">
                      <label for="Qualification">Qualification</label>
                      <select name="Qualification" id="Qualification" class="form-control">

                          <option required> </option>
                          <option value="secondary"> secondary  </option>
                          <option value="Diploma"> Diploma </option>
                          <option value="Degree"> Degree </option>
                          <option value="Degree"> Degree </option>

                      </select>
                  </div>


                  <div class="col-md-6 mb-3">
                      <label for="Address">Date of Birth</label>
                      <input type="date" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="date of birth"  required>
                  </div>





              </div>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="City">City</label>
                      <input type="City" name="City" class="form-control" id="City" placeholder="City" required>

                  </div>
                  <div class="col-md-3 mb-3">
                      <label for="Contact">Contact NO</label>
                      <input type="text" name="Contact" class="form-control" id="Contact" placeholder="Contact no" required>

                  </div>
                  <div class="col-md-3 mb-3">
                      <label for="Zip">Zip</label>
                      <input type="text" name="Zip" class="form-control" id="Zip" placeholder="Zip" required>

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