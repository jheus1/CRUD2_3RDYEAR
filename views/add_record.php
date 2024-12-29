<?php 
include "../classes/record.php";
$employee->add();
$data = $employee->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/libararies2.php'; ?> 
</head>



<body>

    <form action="" method="POST">
        <div class="row container-fluid">
            <div class="mb-2">
                <label>First Name</label>
            </div>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-2">
                <label>Last Name</label>
            </div>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-2">
                <label>Date</label>
            </div>
            <input type="date" class="form-control" name="date_created">
        </div>
        <button onclick="myFunction()" type="submit"  name="add"> SAVE </button>
        <a href="./index.php">Cancel</a>
    </form>
</body>
