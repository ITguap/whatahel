<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
    $old_password= md5(md5(mysqli_real_escape_string($conn,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($conn,$_POST['newPassword'])));
    $email=$_SESSION['email'];
    $password_from_database_query="select password from users where email='$email'";
    $password_from_database_result=mysqli_query($conn,$password_from_database_query) or die(mysqli_error($conn));
    $row=mysqli_fetch_array($password_from_database_result);
    if($row['password']==$old_password){
        $update_password_query="update users set password='$new_password' where email='$email'";
        $update_password_result=mysqli_query($conn,$update_password_query) or die(mysqli_error($conn));
        header('Location: loading.php');
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Неправильный пароль!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
?>