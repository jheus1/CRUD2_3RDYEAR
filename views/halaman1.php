<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once "../classes/halaman.php";
    session_start(); 
    $try1->add();
    $try1->save(); 
    $data = $try1->getAll();
    ?>
    <title>Dashboard</title>
    <link rel="icon" href="../includes/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-light mb-3">
        <div class="container-fluid">
            <!-- Navbar content -->
        </div>
    </nav>
</header>

<div class="card">
    <div class="card-body">
        <h4 class="text-center"><strong>DASHBOARD</strong></h4>

        <form action="" method="POST">

            <button name="add" type="submit" class="btn btn-warning btn-floating btn-lg">
                <i class="fas fa-plus"> ADD</i>
            </button>
            
  
            <button name="save" type="submit" class="btn btn-success btn-floating btn-lg">
                <i class="fas fa-save"> SAVE</i>
            </button>
        </form>

        <!-- Data table -->
        <table class="table table-hover table-responsive" id="myTable">
            <thead>
                <tr>
                    <th>CODE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?= strtoupper($row['code']); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="navbar navbar-light text-light text-center py-4">
    <div class="container-fluid">
        <p>&copy; 2024 FEU Tech All rights reserved.</p>
    </div>
</footer>
</body>
</html>
