<?php
    require 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/bsalon.png" />
        <title>VKUSOVED</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background-color: rgb(194 189 194 / 70%);">
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary" style="
                                background-color: #bbbbc2;
                                border-color: #000000;">
                            <div class="panel-heading" style="
                                background-color: #bbbbc2;
                                border-color: #000000;">
                                <h3 style="
                                color: #000000;"><b>Войдите в свой аккаунт</b></h3>
                            </div>
                            <div class="panel-body">
                                <p>Войдите, чтобы оформить покупку.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Электронная почта" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Пароль(мин. 6 символов)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                    <img src="captcha.php" alt="Captcha" class="captcha" style="max-width: 174px"><br>
                            <input type="text" id="captcha" name="captcha_code" class="input_password" placeholder="Введите код с картинки"><br><br>
                                        <input type="submit" value="Войти" class="btn btn-secondary btn-lg">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer" style="
                                background-color: #bbbbc2;
                                border-color: #000000;">У вас ещё нет аккаунта? <a href="signup.php">Зарегистрироваться</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                <p>Copyright &copy <a href="denchous">VKUSOVED</a> Вкусные рецепты. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
