<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
h1{
    text-align: center;
}
form {
    margin: auto;
    width: 400px;
    padding: 20px;
    border: 1px solid rgb(245, 244, 242);
    border-radius: 10px;
    background-size: cover;
    background-color: rgb(247, 245, 242);
}
label {
    display: block;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    opacity: 0.5;
}

[type=submit]{
    background-color: rgb(136, 136, 135);
    font: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    height: 35px;
    /* width: 100px; */
    cursor: pointer;
    text-decoration: none;
    border-radius: 10px;
    color: black;
}

[type=submit]:hover {
    background-color: rgb(81, 80, 80);
}
</style>

</head>
<body>
    <form action="logincontroller.php" method="POST">
        <h1>Login</h1>
    <div>
        <label for="name">
        Email:<input type="email" name="email" required>
        </label>
    </div>

    <div>
        <label for="password" name="password">
            Password:<input type="paasword" name="password" required>
        </label>
    </div>

    <div>
        <label for="submit">
            <input type="submit" name="submit" value="Login">
        </label>
        
    </div>

    <div>
        <label for="submit">
            <span>Don't have an account</span>
            <a href="signup.php">Sign Up</a>
        </label>
    </div>
</form>
<?php
if(isset($_GET["error"])){
    echo"<script>alert('Invalid Credential')</script>";

}
?>
</body>
</html>