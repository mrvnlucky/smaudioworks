<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>SM Audioworks</title>
</head>

<body>
    <?php
    include('config.php');
    include('login.inc.php');
    ?>

    <div class="container-lg">
        <form action="login.php" method="post">
            <?php include('errors.php'); ?>
            <div class="form-group">
                <label for="inputEmail">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">

            </div>
            <div class="form-group">
                <button type="submit" name="login-submit" class="btn btn-primary">Submit</button>
            </div>

            <div class="form-text">
                <p>Not yet a member? <a href="register.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>

</html>