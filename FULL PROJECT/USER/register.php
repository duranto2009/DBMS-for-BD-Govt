<!DOCTYPE html>
<html>
<head>
<title>SingUp</title>
<link rel = "stylesheet" type="text/css" href="index.css">
</head>

<body>

    <img class= "img-logo" src="images/Government_Seal_of_Bangladesh.png" alt="">
    
    <div class="reg">
    <h1>Register</h1>
    </div>


    <form method="POST" action="register.php">

    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username">
    </div>

    <div class="input-group">
    <label>Email</label>
    <input type="text" name="email">
    </div>

    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
    </div>

    <div class="input-group">
    <label>Confirm Password</label>
    <input type="password" name="password_2">
    </div>

    <div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
    </div>

    <p>
    
    Already a member? <a href="login.php">Sign in</a>
    
    </p>

    </form>

</body>
</html>