<!DOCTYPE html>
<html>

<head>
    <title>myphp</title>
</head>


<body>
    <div class="container">
        <div class="header">
            <h1>Log In</h1>
        </div>
        <form action="registration.php" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="login_user">Log in</button>
            <p>New Member?
                <a href="login.php">Login</a>
            </p>


        </form>

    </div>
</body>

</html>