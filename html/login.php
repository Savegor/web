<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Savvinov_EXAM</title>
</head>
<body>
    <div class="container">
        <h1>Войти</h1>
        <form method="POST" action="login.php">
            <div class="form_item">
                <input type="text" id="login" name="login" placeholder="login">
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
        header("Location: index.php");
    }
    $link = mysqli_connect('db', 'root', 'eve@123', 'bd');

    if (isset($_POST['submit'])) {
        $username = $_POST['login'];
        $pass = $_POST['password'];
    }
    if (!$username || !$pass) die ('<script>alert("Пожалуйста введите все значения!")</script>');

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: index.php');
    } else {
        echo '<script>alert("не правильное имя или пароль")</script>';
    }
?>
