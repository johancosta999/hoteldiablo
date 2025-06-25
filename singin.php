<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../website_full/singin.css">
</head>
<body>
    
    <div class="signup-container">
        <h2>SIGN UP</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="full-name">Full Name :</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>

            <div class="input-group">
                <label for="email">Email Address :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone Number (optional) :</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password :</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Terms and Conditions Checkbox</label>
            </div>

            <button type="submit" class="signup-btn">Sign Up</button>
        </form>
    </div>

</body>
</html>
