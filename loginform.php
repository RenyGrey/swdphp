<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginform.php" method="post">
        <label for="username">Name:</label>
        <input type="text" name="username" id="username"> <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" value="login">
    </form>
</body>
</html>

<?php 
    //collect from data
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        //validate form data
        if ($username == "admin" && $password == "123456") {
            //login successful
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: profile.php");
            exit();
        }   else {
            //login failed
            echo "Login failed";
        }

    }
?>