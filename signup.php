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

    <div class="container-lg">

        <form action="signup.inc.php" method="post">

            <div class="form-group">
                <label for="name">Full Name</label>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="user@mail.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="number" name="phone" value="<?php echo $phone; ?>" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit" name="signup-submit">Submit</button>
            </div>

            <div class="form-text">
                <p>Already a member?</p>
                <a href="login.php">Login</a>
            </div>

        </form>

    </div>

</html>