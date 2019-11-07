<?php
session_start();
if (!$_SESSION['login']) {
    header('Location: login.php');
    exit;
}
require_once '../classes/Database.php';
require_once '../classes/Info.php';

$info = new Info();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Messages</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php?logout='true'">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1 class="text-center mt-5">Messages</h1>

        <?php if (!empty($info->getMessages())) : ?>


            <?php foreach ($info->getMessages() as $message) : ?>

                <p><b>From:</b> <?php echo $message->name; ?></p>
                <p><?php echo $message->text ?></p>


                <form action="" method="POST">

                    <input class='btn btn-primary' type="submit" name="aprove" value="Aprove">
                    <input type="hidden" name='aprove' value="<?php echo $message->id; ?>">

                </form>

                <?php

                        if (isset($_POST['aprove'])) {

                            $info->aprove();

                            header('location: admin.php');
                        }

                        ?>

                <hr>

        <?php endforeach;

        else : echo "No messages yet";

        endif; ?>

    </div>

</body>

</html>