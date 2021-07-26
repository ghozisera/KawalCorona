<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Login</h2><br>
        <form method="post" action="loginkonfirm.php">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>

</html>