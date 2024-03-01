<?php
    require 'config.php';
    session_start();

    if($_POST["captcha_code"] != $_SESSION["captcha_code"]) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    die;}

    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "
        Неверный почтовый ящик. Вас перенаправят обратно на страницу входа...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['password'])));
    if(strlen($password)<6){
        echo "
        Пароль должен содержать не менее 6 символов. Вас перенаправят обратно на страницу входа...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $user_authentication_query="select id,email from users where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($conn,$user_authentication_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("Неправильное имя или пароль");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['id'];
        header('location: index.php');
    }
    
 ?>