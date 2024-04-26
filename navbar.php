<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    
</head>
<body>
    <div class="d-flex justify-content-center my-5 bg-dark p-2">
         <?php
         include 'connection.php';
         if ($_SESSION['id'] == Null){
        ?>


        <a href="index.php" class="btn btn-light me-2">Register</a>
        <a href="login.php" class="btn btn-light me-2">Login</a>

        <?php
        }else{
        ?>
            <a href="dashboard.php"  class="btn btn-light me-2">Dashboard</a>
            <a href="logout.php"  class="btn btn-danger me-2">Logout</a>
        <?php
        }
        ?>
    </div>