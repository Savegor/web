<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Savvinov_EXAM</title>
</head>

<body>
    <div class="container">
        <h1>INDEX>PHP</h1>
        <div>
            <?php
            if (!isset($_COOKIE['User'])) {
                ?>
                <a href="/register.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>
                <?php
            } else {
                echo "HELLO";
                echo $_COOKIE['User'];
            }
            ?>
        </div>
    </div>
</body>

</html>