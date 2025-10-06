<?php require_once('connection.php'); ?>
<?php
    //check for form submission
    if (isset($_POST['submit'])) {

    

    //check if the username and password has been entered
        if(isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
            $errors[] = 'Username is Missing / Invaild';
        }

    //check if there are any errors in  the form
    if (empty($errors)) {
        //save username and password into variables

        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);


        // prepare database quary
        $query = "select * from user where emain = '{$email}' and password = '{$hashed_password}' limit 1";
        $result_set = mysqli_query($connection, $query);

        if ($result_set) {
            if (mysqli_num_rows($result_set) == 1) {

            } else {
                $error[] = 'Invalid Username / password';
            }
        } else {
            $errors[] = 'Databse query failed';
        }

        //check if the user is valid

        //redirecct to users.php

        //if not display the error
    }

    }

       
?>
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

                <?php
                    if (isset($errors) && empty($errors)) {
                        echo '<p class="error">Invaild User name and passwor</p>';
                    }
                ?>
                
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