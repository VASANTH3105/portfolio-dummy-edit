<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM new_table WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href=".\index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            color:#ffffff;
            background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)), url("https://media.istockphoto.com/id/1324896013/vector/black-abstract-layer-overlaps-with-golden-lines-illustration-background.jpg?s=612x612&w=0&k=20&c=f60t3h--MeU_aJf8tmY6aFmJxIUjwqPlUKp09gyBWR4=");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        
    </style>
</head>

<body>

    <div id="contain" class="container-fluid col-10 mt-5 text-center">
    <h1 class="mt-5 text-center ">Welcome, 
        <?php echo $row["name"]; ?>
    </h1>
    <br>
    <h5 class=" text-center "><small>Your ID:</small>
        <?php echo $row["email"]; ?>
    </h5>
    <div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=https://st2.depositphotos.com/1245125/5751/v/950/depositphotos_57511171-stock-illustration-vector-gold-background-with-floral.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Premiun member</h5>
                <p class="card-text">Now you have access to visit protfoilo</p>
                <a href=".\protfoliopage\index.html" class="btn btn-warning">Visit protfolio</a><br>
                <a href="logout.php">Logout</a>
            </div>
        </div>

    </div>

   
    

<!--
    <a href="logout.php">Logout</a>
    <br>
    <a href=".\protfoliopage\index.html">main page</a>

    </div>
    -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>