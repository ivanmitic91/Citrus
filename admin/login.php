<?php
session_start();
require_once '../classes/Info.php';
$info = new Info();
if (isset($_GET['logout'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">

        <h1 class='text-center mt-5'>Admin</h1>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
            </div>

            <input class='btn btn-primary' type="submit" name="insertInfo" value="Login">


        </form>

        <?php if (isset($_POST['name']) && isset($_POST['email'])) {

            if ($info->checkUser()) {

                $_SESSION['login'] = true;
                header("Location: admin.php");
            }
        } ?>

    </div>

</body>

</html>