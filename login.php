<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Войти</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";

        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;

            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Неправильный логин/пароль!</h3><br/>
                  <p class='link'>Нажмите, чтобы <a href='login.php'>Войти</a> еще раз.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Вход</h1>
        <input type="text" class="login-input" name="username" placeholder="Username/Логин" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Пароль"/>
        <input type="submit" value="Войти" name="submit" class="login-button"/>
        <p class="link"><a href="register.php">Регистрация</a></p>
  </form>
<?php
    }
?>
</body>
</html>