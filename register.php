<!DOCTYPE html>
<html>
    <head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;500;700&display=swap" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="topnav">
            <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" />   OnlineLibrary</a>
        </nav>

        <?php
                if(isset($_GET["registration"]))
                {
                    if ($_GET["registration"] == "success")
                    {
                        echo '<div class="alert alert-success">Success!</div>';

                    }
                }
                if(isset($_GET["error"]))
                {
                    if ($_GET["error"] == "passwordsmismatch")
                    {
                        echo '<div class="alert alert-danger">Пароли не совпадают!</div>';

                    }
                    else if ($_GET["error"] == "stmt")
                    {
                        echo '<div class="alert alert-danger">Трабла в STMT</div>';
                    }
                    else if ($_GET["error"] == "emptyinputs")
                    {
                        echo '<div class="alert alert-danger">Заполните все поля!</div>';
                    }
                    else if ($_GET["error"] == "logintaken")
                    {
                        echo '<div class="alert alert-danger">Логин уже используется</div>';
                    }
                    else if ($_GET["error"] == "incorrectlogin")
                    {
                        echo '<div class="alert alert-danger">Логин должен содержать только буквы и цифры!</div>';
                    }
                }

        ?>

        <div class="block">
            <h2>Register</h2>
            <form class="center" action="includes/register.inc.php" method="POST">
                <input name="username" placeholder="Login" type="text">
                <input name="password" placeholder="Password" type="password">
                <input name="repeat_password" placeholder="Repeat Password" type="password">
                <button name="submit" type="submit">Sign up</button>
                <a href="login.php" class="button">Log in</a>
            </form>
         </div>

    <footer>

    </footer>
    
    </body>
</html>
