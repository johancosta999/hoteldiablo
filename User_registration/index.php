<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="login-container" aria-label="Login Form">
        <h2>Log In to Your Account</h2>
        
        <form action="login.php" method="post" id="login-form">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required aria-required="true">
                <span class="error-message" id="username-error"></span>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required aria-required="true">
                <span class="error-message" id="password-error"></span>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember me</label>
            </div>

            <button type="submit" class="login-btn" name="login">Log In</button>            
        </form>

        <div class="social-login">
                <a href="#"><img src="image/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="image/google.png" alt="Google"></a>
                <a href="#"><img src="image/twitter.png" alt="Twitter"></a>
            </div>

            <div class="signup-link">
                Don’t have an account? <a href="SignUp.php">Sign Up</a>
            </div>
    </div>

</body>
</html>
