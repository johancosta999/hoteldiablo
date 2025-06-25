<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="SignUp.css">
    
</head>
<body>

    <div class="signup-container" aria-label="Sign Up Form">
        <h2>Create Your Account</h2>
        
        <form action="register.php" method="post" id="signup-form">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required aria-required="true">
                <span class="error-message" id="username-error"></span>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required aria-required="true">
                <span class="error-message" id="email-error"></span>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required aria-required="true">
                <span class="error-message" id="password-error"></span>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required aria-required="true">
                <span class="error-message" id="confirm-password-error"></span>
            </div>

            <button type="submit" class="signup-btn" name="signup">Sign Up</button>            
        </form>

        <div class="social-login">
                <a href="#"><img src="image/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="image/google.png" alt="Google"></a>
                <a href="#"><img src="image/twitter.png" alt="Twitter"></a>
            </div>

            <div class="login-link">
                Already have an account? <a href="index.php">Log In</a>
            </div>
    </div>

    <script src="signup.js"></script>

</body>
</html>
