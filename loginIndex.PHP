<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
        <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
  <div>
    <img src="images/logo.jpg" alt="logo">
    </div>
    <h2>Login</h2><br>

    <div class="login">
    <form id="login" method="POST" action="loginn.PHP">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label><b>User Name
        </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username"  >
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password" >
        <br><br>
        <input type="submit" name="log" id="log" value="Log In Here">
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>


    </form>
</div>
</body>
</html>
