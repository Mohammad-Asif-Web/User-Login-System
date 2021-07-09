<?php 

include 'config.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if (!$result){
        echo "<script>alert('Woops! Something went wrong.').')</script>";
    
    }
    } else {
        echo "<script>alert('password Not Matched.')</script>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Register Form</title>
</head>
<body>
    <div class="container">
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
        <input type="text" placeholder="Username" name="Username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?> required>
        </div>
        <div class="input-group">
        <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?> required>
        </div>
        <div class="input-group">
        <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $_POST['cpassword']; ?> required>
        </div>
        <div class="input-group">
        <button name="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">have an account?<a href="index.php">Login Here</a></p>
    </form>
    </div>
</body>
</html>