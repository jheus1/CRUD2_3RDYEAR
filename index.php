<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         require "./classes/record.php";
         $data = $employee->getAll();
          include './includes/library1.php';
        
         ?>
      <title>Dashboard</title>
      <link rel="icon" href="./includes/favicon.ico">
      <link rel="stylesheet" href="./css/style.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
      <div class="container">
         <div class="row justify-content-end">
            <div class="card col-md-3 mb-3 me-3">
               <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-md-6">
                        <button type="button" class="btn btn-outline-success"><a href="./views/new_record.php" style="text-decoration: none; color:black;">New Record <i class="fa-solid fa-file-import"></i></a></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="row">
               <h4 class="text-center"><strong>DASHBOARD</strong></h4>
               <table class="table table-hover table-responsive" id="myTable">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $row) { ?>
                     <tr>
                        <td><a href="./views/view_record.php?id=<?=$row['id']?>" style="text-decoration:none; color:black;" onmouseover="this.style.color='#fd7e14'" onmouseout="this.style.color='black'"><?= strtoupper($row['id']);?></a></td>
                        <td><a href="./views/view_record.php?id=<?=$row['id']?>" style="text-decoration:none; color:black;" onmouseover="this.style.color='#fd7e14'" onmouseout="this.style.color='black'"><?= strtoupper($row['firstname']) . ' ' . strtoupper($row['middlename']) . ' ' . strtoupper($row['lastname']); ?></a></td>
                        <td><a href="./views/view_record.php?id=<?=$row['id']?>" style="text-decoration:none; color:black;" onmouseover="this.style.color='#fd7e14'" onmouseout="this.style.color='black'"><?=strtoupper($row['email']);?></a></td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <script>
         $(document).ready(function() {
             $('#myTable').DataTable();
         });
      </script>
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

