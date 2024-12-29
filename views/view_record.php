<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include '../classes/record.php';
         if (isset($_GET['id'])) {
             $id = $_GET['id']; 
             $data = $employee->getUser($id);
         }
         ?>
      <meta charset="utf-8">
      <title>View Record</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/view_record.css">
      <link rel="stylesheet" href="unicodefuturab.ttf">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
         crossorigin="anonymous"></script>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <!-- DataTables CSS -->
      <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
      <link rel="icon" href="../includes/favicon.ico">
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
      <div class="container mt-3">
         <div class="row justify-content-end ">
            <div class="card col-md-3 mb-3 me-3">
               <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-md-4">
                        <a type="button" class="btn btn-outline-warning" href="update_record.php?id=<?=$data['id']?>">
                        &nbsp;Edit &nbsp; <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <input type="hidden" name="id">
                        <a type="button" class="btn btn-outline-danger" href="delete_record.php?id=<?=$data['id']?>">
                        Delete <i class="fa-solid fa-trash"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header text-center">
                        <div class="row justify-content-end mt-2">
                           <div class="col-auto">
                              <button type="button" class="btn-close" aria-label="Close" onclick="window.location.href='../index.php'" aria-label="Close" style="background-color: #ff0000;"></button>
                           </div>
                        </div>
                        <h2>VIEW RECORD</h2>
                     </div>
                     <div class="card-body mb-5">
                        <div class="row justify-content-center mb-5">
                           <div class="col-md-3">
                              <div class="card mb-5">
                                 <div class="card-header">Personal Information</div>
                                 <div class="card-body">
                                    <p><strong>Name:</strong> <?=ucwords($data['firstname']) . ' ' . ucwords($data['middlename']) . ' ' . ucwords($data['lastname'])?></p>
                                    <p><strong>Birthday:</strong> <?=$data['bday']?></p>
                                    <p><strong>Age:</strong> <?=$data['age']?></p>
                                    <p><strong>Gender:</strong> <?=ucwords($data['gender'])?></p>
                                    <p><strong>Civil Status:</strong> <?=ucwords($data['civil'])?></p>
                                    <p><strong>Religion:</strong> <?=ucwords($data['religion'])?></p>
                                    <p><strong>Nationality:</strong> <?=ucwords($data['nationality'])?></p>
                                    <p><strong>Blood Type:</strong> <?=ucwords($data['blood'])?></p>
                                    <p><strong>Height:</strong> <?=$data['height']?></p>
                                    <p><strong>Weight:</strong> <?=$data['weight']?></p>
                                    <!-- Add other personal information fields as needed -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-header">Contact Information</div>
                                 <div class="card-body">
                                    <p><strong>Email Address:</strong> <?=ucwords($data['email'])?></p>
                                    <!-- Add other contact information fields as needed -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-header">Birth Place / Address</div>
                                 <div class="card-body">
                                    <p><strong>Birthplace:</strong> <?=ucwords($data['pob'])?></p>
                                    <p><strong>Address:</strong> <?=ucwords($data['house']) . ', ' . ucwords($data['street']) . ', ' . ucwords($data['brngy']) . ', ' . ucwords($data['city']) . ', ' . ucwords($data['district']) . ', ' . ucwords($data['province']) . ', ' . ucwords($data['country'])?></p>
                                    <p><strong>Lot Number:</strong> <?=$data['lot']?></p>
                                    <p><strong>ZIP Code:</strong> <?=$data['zip']?></p>
                                    <!-- Add other address information fields as needed -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-header">Goverment's ID</div>
                                 <div class="card-body">
                                    <p><strong>TIN Number:</strong> <?=ucwords($data['tin'])?></p>
                                    <p><strong>SSS Number:</strong> <?=ucwords($data['sss'])?></p>
                                    <p><strong>GSIS Number:</strong> <?=ucwords($data['gsis'])?></p>
                                    <p><strong>PagIbig:</strong> <?=ucwords($data['pagibig'])?></p>
                                    <p><strong>PhilHealth:</strong> <?=ucwords($data['philhealth'])?></p>
                                    <p><strong>Voters ID:</strong> <?=ucwords($data['voters'])?></p>
                                    <p><strong>Precinct Number:</strong> <?=ucwords($data['precint'])?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <div>
   <div class="d-flex justify-content-end me-3">
      <button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
      </button>
   </div>
   <footer class="navbar navbar-light text-light text-center py-4 mt-3">
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