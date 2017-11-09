<?php
    $submitted = !empty($_POST);
    if($submitted == True){
        setcookie('username', $_POST['username']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BookStore</title>
    </head>
    <body>
        <p>Form submitted? <?php echo (int) $submitted; ?></p>
        <p>Your Login Info is !</p>
        <ul>
            <li><b>Username: </b> <?php echo $_POST['username'];?></li>
            <li><b>Password: </b> <?php echo $_POST['password'];?></li>
        </ul>
    </body>
</html>
