<?php
   include '../includes/library1.php';
   include "../classes/record.php";
   $employee->add();
   $data= $employee->getAll();
   ?>
<!DOCTYPE html>

<html lang="en">
   <head>
   <title>Add Record</title>
   <link rel="icon" href="../includes/favicon.ico">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/new_record.css"> 
    <link rel="stylesheet" href="unicodefuturab.ttf">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
   </head>


   <header>
      <nav class="navbar navbar-light mb-3">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-auto">
                  <a class="navbar-brand" href="./index.php">
                  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d7/Far_Easter_University_Logo.svg/1200px-Far_Easter_University_Logo.svg.png" width="70" height="60" alt="FEU Logo">
                  </a>
                  <a href="index.php">
                  <img src="https://www.feutech.edu.ph/assets/img/logos/headlogocut.png" alt="FEU Tech Logo" style="max-width: 20%; filter: brightness(0) invert(1);" class="img-fluid">
                  </a>
               </div>
            </div>
         </div>
      </nav>
   </header>
   <body>
   <div class="blurry-background"></div>
      <form action="" method="POST">
         <div class="container-fluid mt-4">
            <div class="row">
               <h1>RECORD FORM</h1>
               <div class="col-md-6">
                  <h3 class="text-center">Personal Information</h3>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">First Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="firstname" placeholder="First name" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Last Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="lastname" placeholder="Last Name" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Middle Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="middlename" placeholder="Middle Name">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Email Address</label>
                     <div class="col-sm-8">
                        <input type="email" class="form-control border border-success mb-3" name="email" placeholder="Email Address" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Gender</label>
                     <div class="col-sm-8">
                        <input type="gender" class="form-control border border-success mb-3" name="gender" placeholder="Gender" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Civil Status</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="civil" placeholder="Civil Status" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Birthday</label>
                     <div class="col-sm-8">
                        <input type="date" class="form-control border border-success mb-3" name="bday" placeholder="Birthday" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Age</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="age" placeholder="Age" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Place of Birth</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="pob" placeholder="Place of Birth" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Religion</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="religion" placeholder="Religion" required> 
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Nationality</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="nationality" placeholder="Nationality" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Blood Type</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="blood" placeholder="Blood Type" required> 
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Weight</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="weight" placeholder="Weight" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Height</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="height" placeholder="Height" required>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h3 class="text-center">Address Information</h3>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Lot Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="lot" placeholder="Lot Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">House No</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="house" placeholder="House Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Street</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="street" placeholder="Street" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">District</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="district" placeholder="District" required> 
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">City</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="city" placeholder="Municipality" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Province</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="province" placeholder="Province" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Barangay</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="brngy" placeholder="Barangay" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Country</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="country" placeholder="Country" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Zip Code</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="zip" placeholder="Zip Code" required>
                     </div>
                  </div>
                  <h3 class="text-center">Governments ID</h3>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">TIN Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="tin" placeholder="TIN Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">SSS Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="sss" placeholder="SSS number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">GSIS Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="gsis" placeholder="GSIS Number" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Pag-Ibig</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="pagibig" placeholder="Pag-ibig" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">PhilHealth</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="philhealth" placeholder="Philhealth" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Voters ID</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="voters" placeholder="Voters ID" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Precint Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="precint" placeholder="Precint Number" required>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-end mb-5">
                  <div class="col-md-2 me-2">
                     <div class="form-group row">
                        <button onclick="myFunction()" type="submit" name="add" class="btn btn-success mb-3">Save</button>
                     </div>
                  </div>
                  <div class="col-md-2 me-5">
                     <div class="form-group row">
                        <a href="../index.php" class="btn btn-danger mb-3">Cancel</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </body>
   <div class="d-flex justify-content-end me-3 mb-3">
      <button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
      </button>
   </div>
   <footer class="navbar navbar-light text-light text-center py-4">
      <div class="container-fluid">
         <p>&copy; 2024 FEU Tech All rights reserved.</p>
      </div>
   </footer>
</html>
