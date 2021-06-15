<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');

    if (isset($_REQUEST['username'])) {
        $fullname = stripslashes($_REQUEST['fullname']);
        $fullname = mysqli_real_escape_string($con, $fullname);

        $phonenumber = stripslashes($_REQUEST['phonenumber']);
        $phonenumber = mysqli_real_escape_string($con, $phonenumber);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query    = "INSERT into `users` (fullname, phone_number, email, username, password)
                     VALUES ('$fullname','$phonenumber', '$email', '$username', '$password')";

        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Вы успешно зарегистрированы!</h3><br/>
                  <p class='link'>Нажмите, чтобы <a href='login.php'>Войти</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Заполните все поля!</h3><br/>
                  <p class='link'>Нажмите, чтобы <a href='registration.php'>сделать регистрацию</a> еще раз</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Регистрация</h1>

        <input type="text" class="login-input" name="fullname" placeholder="ФИО" required />

        <input type="text" class="login-input" name="phonenumber" placeholder="Номер телефона" required />

        <input type="text" class="login-input" name="email" placeholder="Email Adress">

        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <input type="password" class="login-input" name="password" placeholder="Password">

        <input type="submit" name="submit" value="Зарегистрироваться" class="login-button">

        <p class="link"><a href="login.php">Нажмите, чтобы Войти</a></p>
    </form>
<?php
    }
?>
</body>
</html>