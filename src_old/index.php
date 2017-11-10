<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BookStore - Login </title>
    </head>
    <body>
        <p>Enter your details to login</p>
        <form action="authenticate.php" method="post">
            <label>Username</label>
            <input type="text" name="username" />
            <label>Password</label>
            <input type="password" name="password" />

            <input type="submit" value="Login">
        </form>

        <p>You are <?php echo $_COOKIE['username']; ?></p>
    </body>
</html>
