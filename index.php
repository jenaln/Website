<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Singup.css">
</head>
<body>
	
     <form action="login.php" method="post" class="l">
   
     	<div class="h"> &nbsp;LOGIN </div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>USERNAME</label>
     	<input type="text" name="uname" placeholder="Enter username"><br>

     	<label>PASSWORD</label>
     	<input type="password" name="password" placeholder="Enter password"><br>
		 <button type="reset" value="CLEAR" id="btnReset">RESET </button>
     	<button type="submit">LOGIN</button>
          <a href="signup.php" class="lo"><u>Create an account </u></a>
     </form>
</body>
</html>