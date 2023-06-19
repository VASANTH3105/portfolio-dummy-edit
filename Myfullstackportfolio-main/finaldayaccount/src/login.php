<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM new_table WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        } else {
            echo
                "<script> alert('Password does not match'); </script>";
        }

    } else {
        echo
            "<script> alert('User not Registered'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href=".\index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid col-10">
        <section id="login">
            <div class="col-lg-4 col-md-6 col-12">
                <h1 class=" mb-3 alert alert-info text-center">Login page</h1>
                <form class="" action="" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label" for="usernameemail">Username or Email :</label>
                        <input class="form-control" type="text" name="usernameemail" id="usernameemail" required
                            values="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password :</label>
                        <input class="form-control" type="password" name="password" id="password" required values="">
                    </div>
                    <button class="btn btn-primary position-relative" type="submit" name="submit">Login</button>
                    <br><br>
                    <a href="registration.php">New user? register here</a>
                </form>

            </div>
        </section>
    </div>
</body>

</html>