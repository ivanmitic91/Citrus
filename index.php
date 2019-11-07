<?php
require_once 'classes/Citrus.php';
require_once 'classes/Info.php';
require_once 'classes/User.php';
require_once 'classes/Session.php';


$citrus = new Citrus();
$info = new Info();
$user = new User();
$session = new Session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Citrus</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mainTitle">Citrus</h1>

        <div class="grid">
            <?php foreach ($citrus->getAllFromCitrus() as $c) : ?>

                <div class="cell mb-5">
                    <div class="text-center title"><?php echo htmlspecialchars($c->title) ?></div>
                    <div>
                        <?php echo "<img width='100%' src='images/" . htmlspecialchars($c->image) . "'/>"; ?>
                    </div>
                    <div class="description">
                        <?php echo htmlspecialchars($c->description) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-center">Comment</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" value="" name="name" id="name" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" value="" class="form-control" name="email" id="email" placeholder="">
            </div>
            <div class="form-group">
                <label for="message">Message</label><textarea class="form-control" name="message" id="message" rows="6"></textarea>
            </div>

            <input class='btn btn-primary' type="submit" name="insertInfo" value="Send">

        </form>


        <?php if (isset($_POST['insertInfo'])) {

            $user->setName(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
            $user->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
            $user->setMessage(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

            $session->flash('email');
            $session->flash('name');
            $session->flash('message');

            if ($user->checkFields()) {

                $info->insertInfo($user->getName(), $user->getEmail(), $user->getMessage());
            }
        } ?>

        <div class="comments mt-5">
            <div class="comment">
                <h3>Comments</h3>

                <?php if (!empty($info->getInfo())) : ?>

                    <?php foreach ($info->getInfo() as $info) : ?>

                        <?php if ($info->role == 1) {
                                    continue;
                                }
                                ?>

                        <?php
                                if ($info->status != 0) : ?>

                            <p><b>From:</b> <?php echo $info->name; ?></p>
                            <p><?php echo $info->text ?></p>

                            <hr>

                        <?php endif; ?>

                <?php endforeach;

                else : echo "No comments yet";

                endif; ?>

            </div>
        </div>

    </div>

</body>

</html>