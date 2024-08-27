<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="Login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="Login">
        </form>
    </div>
    <?php
        // link your MySql serveur and select your database
        if(isset($_POST['Login'])){
            //Try Your login and pass if there in the database  
        }
    
    ?>
</body>
</html>
