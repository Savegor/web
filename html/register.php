<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Savvinov_EXAM</title>
</head>
<body>
    <div class="container">
        <h1>Регистрация</h1>
        <form method="POST" action="register.php">
            <div class="form_item">
                <input type="text" id="login" name="login" placeholder="login">
            </div>
            <div class="form_item">
                <input type="email" id="email" name="email" placeholder="email">
            </div>
            <div class="form_item">
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" name="submit">Продолжить</button>
        </form>
    </div>
</body>
</html>

<?php
    require_once('db.php');
    if (isset($_COOKIE['User'])) {
        header("Location: login.php");
    }
    $link = mysqli_connect('db', 'root', 'eve@123', 'bd');

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $username = $_POST['login'];
        $password = $_POST['password'];
    }
    if (!$email || !$username || !$password) die ('<script>alert("Пожалуйста введите все значения!")</script>');
    $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$password')";
    if(!mysqli_query($link, $sql)) {
        echo '<script>alert("не правильное имя или пароль")</script>';
    }
?>
