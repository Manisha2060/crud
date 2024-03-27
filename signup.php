
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    
</head>
<body>
    <form action="signupcon.php" method="post">
        <h1>Sign Up</h1>

        <div>
            <label for="name">
            Name:<input type="text" name="name" required>
            </label>
        </div>

        <div>
            <label for="email">
                Email:<input type="email" name="email" >
            </label>
    
        </div>

        <div>
            <label for="password" name="password">
                Password:<input type="password" name="password" required>
            </label>
        </div>

        <div>
            <label for="submit">
                <input type="submit" name="submit" value="Sign Up">
            </label>
            
        </div>

        <div>
            <label for="submit">
                <span>Already have an account</span>
                <a href="login.php">Login</a>
            </label>
        </div>
       </form>
</body>
</html>