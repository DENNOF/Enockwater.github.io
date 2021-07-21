<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>myphp</title>
</head>


<body>
    <div class="container">
        <div class="header">
            <h1>Register</h1>
        </div>
        <form action="register.php" method="POST">

        <?php include('errors.php') ?>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>



            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password_1" required> 

            </div>
            <div>
                <label for="password">Confirm Password</label>
                <input type="password" name="password_2" required>

            </div>
            <button type="submit">Submit</button>
            <p>Already a user?
                <a href="login.php">Login</a>
            </p>


        </form>

    </div>
</body>

</html>