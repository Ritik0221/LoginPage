<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type ="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method ="post" >
            <div class="box">
                     <h2>LOGIN PAGE</h2>
            </div>

            <?php if(isset($_GET['error'])){ ?>
                <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
            <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

            <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
        </form>
    </body>
</html>