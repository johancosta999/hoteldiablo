<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <h2>LOG IN</h2>
        
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember me</label>
            </div>

            <button type="submit" class="login-btn" name="login">Log in</button>

            <div class="admin-link">
                <a href="admin_login.php">Are You An Admin?</a>
            </div>

            <div class="or-divider">
                <span>OR</span>
            </div>

            <div class="social-login">
                <a href="#"><img src="/hoteldiablo/images/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="/hoteldiablo/images/web.png" alt="Web"></a>
                <a href="#"><img src="/hoteldiablo/images/twitter.png" alt="Twitter"></a>
            </div>

            <div class="signup-link">
                <p style="font-size: small;">Need an account?</p><br> 
                <a href="singin.php">SIGN UP</a>
            </div>
        </form>
    </div>

    <script src="login.js"></script>

</body>
</html>