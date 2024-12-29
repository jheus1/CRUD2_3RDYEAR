<?php
   require "../classes/record.php";
   if (isset($_GET['id'])) {
       $data = $employee->getUser($_GET['id']);
   }else{
   }
   if(isset($_POST['update'])){
       $employee->update($_GET['id']);
       header("Location: ../index.php");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Update Record</title>
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
         <div class="container-fluid">
            <div class="row">
               <h1>UPDATE YOUR RECORD</h1>
               <div class="col-md-6">
                  <h3 class="text-center">Personal Information</h3>
                  <!-- First Name -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">First Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="firstname" placeholder="First name" value="<?php echo $data['firstname'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Last Name -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Last Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="lastname" placeholder="Last Name" value="<?php echo $data['lastname'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Middle Name -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Middle Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="middlename" placeholder="Middle Name" value="<?php echo $data['middlename'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Email Address -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Email Address</label>
                     <div class="col-sm-8">
                        <input type="email" class="form-control border border-success mb-3" name="email" placeholder="Email Address" value="<?php echo $data['email'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Gender -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Gender</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="gender" placeholder="Gender" value="<?php echo $data['gender'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Civil Status -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Civil Status</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="civil" placeholder="Civil Status" value="<?php echo $data['civil'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Birthday -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Birthday</label>
                     <div class="col-sm-8">
                        <input type="date" class="form-control border border-success mb-3" name="bday" placeholder="Birthday" value="<?php echo $data['bday'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Age -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Age</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="age" placeholder="Age" value="<?php echo $data['age'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Place of Birth -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Place of Birth</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="pob" placeholder="Place of Birth" value="<?php echo $data['pob'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Religion -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Religion</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="religion" placeholder="Religion" value="<?php echo $data['religion'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Nationality -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Nationality</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="nationality" placeholder="Nationality" value="<?php echo $data['nationality'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Blood Type -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Blood Type</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="blood" placeholder="Blood Type" value="<?php echo $data['blood'] ?? ''; ?>" required> 
                     </div>
                  </div>
                  <!-- Weight -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Weight</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="weight" placeholder="Weight" value="<?php echo $data['weight'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Height -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Height</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="height" placeholder="Height" value="<?php echo $data['height'] ?? ''; ?>" required>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <!-- Address Information -->
                  <h3 class="text-center">Address Information</h3>
                  <!-- Lot Number -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Lot Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="lot" placeholder="lot" value="<?php echo $data['lot'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- House No. -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">House No</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="house" placeholder="House Number" value="<?php echo $data['house'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Street -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Street</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="street" placeholder="street" value="<?php echo $data['street'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- District -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">District</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="district" placeholder="district" value="<?php echo $data['district'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- City/Municipality -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">City</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="city" placeholder="City" value="<?php echo $data['city'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Province -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Province</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="province" placeholder="Province" value="<?php echo $data['province'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Barangay -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Barangay</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="brngy" placeholder="Barangay" value="<?php echo $data['brngy'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Country -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Country</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control border border-success mb-3" name="country" placeholder="Country" value="<?php echo $data['country'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Zip Code -->
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Zip Code</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="zip" placeholder="Zip Code" value="<?php echo $data['zip'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <!-- Governments ID -->
                  <h3 class="text-center">Government's ID</h3>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">TIN Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="tin" placeholder="TIN Number" value="<?php echo $data['tin'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">SSS Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="sss" placeholder="SSS number" value="<?php echo $data['sss'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">GSIS Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="gsis" placeholder="GSIS Number" value="<?php echo $data['gsis'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Pag-Ibig</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="pagibig" placeholder="Pag-ibig" value="<?php echo $data['pagibig'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">PhilHealth</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="philhealth" placeholder="Philhealth" value="<?php echo $data['philhealth'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Voters ID</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="voters" placeholder="Voters ID" value="<?php echo $data['voters'] ?? ''; ?>" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 col-form-label form-label-highlight mb-3">Precinct Number</label>
                     <div class="col-sm-8">
                        <input type="number" class="form-control border border-success mb-3" name="precint" placeholder="Precinct Number" value="<?php echo $data['precint'] ?? ''; ?>" required>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-end">
                  <div class="col-md-2">
                     <div class="form-group row me-2">
                        <!-- Change button label and name to represent update -->
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group row me-4">
                        <!-- Include employee ID if necessary -->
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>">
                        <a href="view_record.php?id=<?=$data['id']?>" class="btn btn-danger mb-5">Cancel</a>
                     </div>
                  </div>
               </div>
      </form>
      </div>
      </div>
      <div class="d-flex justify-content-end me-3 mb-3">
         <button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
         <i class="fas fa-arrow-up"></i>
         </button>
      </div>
   </body>
   <footer class="navbar navbar-light text-light text-center py-4">
      <div class="container-fluid">
         <p>&copy; 2024 FEU Tech All rights reserved.</p>
      </div>
   </footer>
</html>
<script>
   let mybutton = document.getElementById("btn-back-to-top");
   
   // When the user scrolls down 20px from the top of the document, show the button
   window.onscroll = function () {
   scrollFunction();
   };
   
   function scrollFunction() {
   if (
   document.body.scrollTop > 15 ||
   document.documentElement.scrollTop > 20
   ) {
   mybutton.style.display = "block";
   } else {
   mybutton.style.display = "none";
   }
   }
   // When the user clicks on the button, scroll to the top of the document
   mybutton.addEventListener("click", backToTop);
   
   function backToTop() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
   }
   
</script>