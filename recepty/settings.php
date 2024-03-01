<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>КОСМЕТИКА</title>
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
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Изменить пароль</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Старый пароль">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="Новый пароль">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Повторите новый пароль">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark"><a class="btn btn-dark" style="color: #0f0f0f">Внести изменения</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
               <p>Copyright &copy <a href="denchous">СИЯНИЕ</a> Салон красоты. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
