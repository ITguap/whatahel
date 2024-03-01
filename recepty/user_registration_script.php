<?php
    require 'config.php';
    session_start();

    if($_POST["captcha_code"] != $_SESSION["captcha_code"]) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
        die;}

    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Неверный адрес. Вас перенаправят обратно на страницу регистрации...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['password'])));
    if(strlen($password)<6){
        echo "Пароль должен содержать не менее 6 символов. Вас перенаправят обратно на страницу регистрации...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("Этот адрес уже занят!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        $user_registration_result=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
        header('Location: loading.php');
        $_SESSION['email']=$email;

        $_SESSION['id']=mysqli_insert_id($conn); 
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }
    
?>