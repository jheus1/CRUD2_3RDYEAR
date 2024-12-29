<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="../css/delete.css">
      <link rel="icon" href="../includes/favicon.ico">
      <title>Delete Record</title>
      <?php
         include "../classes/record.php";
         if (isset($_GET['id'])) {
             $data = $employee->getUser($_GET['id']);
         } else {
             // Redirect or handle missing form_id
         }
         
         if (isset($_POST['delete'])) {
             $id = $_GET['id']; // Fetch form_id from GET parameter
             $employee->delete($id);
         }
         ?>
   </head>
   <header>
      <nav class="navbar navbar-light">
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
      <div class="container">
         <div class="blurry-background"></div>
         <div class="row justify-content-center">
            <div class="col-lg-7">
               <div class="card">
                  <div class="card-header text-center">
                     DELETE ROW
                  </div>
                  <div class="card-body">
                     <form action="delete_record.php?id=<?= $_GET['id'] ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <p class="alert alert-color text-center">Are you sure you want to delete the record?</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                           <button class="btn btn-success btn-yes me-md-2" type="submit" name="delete" href="../views/index.php">YES</button>
                           <a class="btn btn-no mt-2 mt-md-0 btn-danger" href="view_record.php?id=<?=$data['id']?>">NO</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <footer class="navbar navbar-light text-light py-4 fixed-bottom text-center">
      <div class="container-fluid">
         <p>&copy; 2024 FEU Tech All rights reserved.</p>
      </div>
   </footer>
</html>