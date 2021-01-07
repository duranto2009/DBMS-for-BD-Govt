<!DOCTYPE html>
<html>
<head>
<title>SingIn</title>
<link rel = "stylesheet" type="text/css" href="index.css">
</head>

<body>

    <img class= "img-logo" src="images/Government_Seal_of_Bangladesh.png" alt="">
    
    <div class="reg">
    <h1>Sign in</h1>
    </div>


    <form method="POST" action="login.php">

    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username">
    </div>

    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
    </div>

    <div class="input-group">
    <!--<button type="submit" name="login" class="btn">Login</button>-->
    <a href="home_page.php" class="btn btn-warning">Login</a>
    </div>

    <p>
    
    Not yet a member? <a href="register.php">Sign up</a>
    
    </p>

    </form>

</body>
</html>