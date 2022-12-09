<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}else {
    $user_id = '';
}

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $verify_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
    $verify_user->execute([$email, $pass]);
    $row = $verify_user->fetch(PDO::FETCH_ASSOC);

    if($verify_user->rowCount() > 0){
        setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
        header('location:home.php');
    }else{
        $warning_msg[] = 'incorrect email or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- link css -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section -->
<?php include 'components/user_header.php'; ?>
<!-- header ends -->

<!-- login section starts -->

<section class="form-container">

    <form action="" method="POST">
        <h3>welcome back!</h3>
        <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
        <input type="password" name="pass" required maxlength="50" placeholder="enter your password" class="box">
        <p>don't have an account? <a href="register.php">register now</a></p>
        <input type="submit" value="login now" name="submit" class="btn">
    </form>

</section>

<!-- login section ends -->















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