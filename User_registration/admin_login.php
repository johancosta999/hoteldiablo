<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>

    <div class="login-container">
        <h2>ADMIN LOG IN</h2>
        
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" name="login" class="login-btn">Log in</button>

           
        </form>
    </div>

    <script src="login.js"></script>

</body>
</html>