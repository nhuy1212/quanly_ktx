<?php
session_start();
include_once("index.php");

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if(login($user,$pass)){
        $_SESSION['user'] = $user;
        header("Location: admin.php");
    }else{
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial;
    background: #f2f2f2;
}

/* KHUNG LOGIN */
.login-box {
    width: 350px;
    margin: 120px auto;
    background: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

/* TIÊU ĐỀ */
.login-box h2 {
    background: #e6e6e6;
    margin: 0;
    padding: 10px;
    font-size: 16px;
}

/* FORM */
.login-box form {
    padding: 20px;
}

/* LABEL */
.login-box label {
    display: block;
    margin-top: 10px;
}

/* INPUT */
.login-box input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
}

/* BUTTON */
.login-box button {
    margin-top: 15px;
    padding: 6px 15px;
    float: right;
    background: #ddd;
    border: 1px solid #aaa;
    cursor: pointer;
}

.login-box button:hover {
    background: #ccc;
}
</style>

</head>

<body>

<div class="login-box">
    <h2>Log In</h2>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button name="login">Go</button>
    </form>
</div>

</body>
</html>