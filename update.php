<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}else {
    $user_id = '';
    header('location:login.php');
}

$select_account = $conn->prepare("SELECT * FROM `users` WHERE id = ? LIMIT 1");
$select_account->execute([$user_id]);
$fetch_account = $select_account->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);

    if(!empty($name)){
        $update_name = $conn->prepare("UPDATE `users` SET name = ? WHERE id = ?");
        $update_name->execute([$name, $user_id]);
        $success_msg[] = 'name updated!';
    }

    if(!empty($number)){
        $update_number = $conn->prepare("UPDATE `users` SET number = ? WHERE id = ?");
        $update_number->execute([$number, $user_id]);
        $success_msg[] = 'number updated!';
    }

    if(!empty($email)){
        $verify_email = $conn->prepare("SELECT email FROM `users` WHERE email = ?");
        $verify_email->execute([$email]);
        if($verify_email->rowCount() > 0){
            $warning_msg[] = 'email already taken!';
        }else{
           $update_email = $conn->prepare("UPDATE `users` SET email = ? WHERE id = ?");
           $update_email->execute([$email, $user_id]);
           $success_msg[] = 'email updated!';
        }
        
    }

    $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $prev_pass = $fetch_account['password'];

    $old_pass = sha1($_POST['old_pass']);
    $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);

    $new_pass = sha1($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);

    $c_pass = sha1($_POST['c_pass']);
    $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

    if($empty_pass != $old_pass){
        if($old_pass != $prev_pass){
            $warning_msg[] = 'old password not matched!';
        }elseif($c_pass != $new_pass){
            $warning_msg[] = 'confirm password not matched!';
        }else{
            if($new_pass != $empty_pass){
                $update_pass = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
                $update_pass->execute([$c_pass, $user_id]);
                $success_msg[] = 'password update';
            }else{
                $warning_msg[] = 'plase enter new password!';
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- link css -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section -->
<?php include 'components/user_header.php'; ?>
<!-- header ends -->

<!-- update section starts -->

<section class="form-container">

    <form action="" method="POST">
        <h3>update your account</h3>
        <input type="text" name="name" maxlength="50" placeholder="<?= $fetch_account['name']; ?>" class="box">
        <input type="email" name="email" maxlength="50" placeholder="<?= $fetch_account['email']; ?>" class="box">
        <input type="number" name="number" maxlength="50" placeholder="<?= $fetch_account['number']; ?>" min="0" max="9999999999" maxlength="10" class="box">
        <input type="password" name="old_pass" maxlength="50" placeholder="enter your old password" class="box">
        <input type="password" name="new_pass" maxlength="50" placeholder="enter your new password" class="box">
        <input type="password" name="c_pass" maxlength="50" placeholder="confirm your new password" class="box">
        <!-- <p>already have an account? <a href="login.php">login now</a></p> -->
        <input type="submit" value="update now" name="submit" class="btn">
    </form>

</section>

<!-- update section ends -->













<!-- footer section starts -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->


<!-- sewwtalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>
    
</body>
</html>