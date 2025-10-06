<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user management system</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="login">
        <form action="index.php" method="post">
            <fieldset>
                <legend><h1>Log In</h1></legend>
                <p class="error">Invaild User name and passwor</p>
                <p>
                    <label for="">User Name</label>
                    <input type="text" name="email" id="" placeholder="Email Address">
                </p>
                <p>
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="Password">
                </p>
                <p>
                    <button type="submit" name="submit">Log In</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
<?php mysqli_close($connection); ?>