<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Event Photography site Login page</title>
	<link rel="stylesheet" type="text/css" href="login system.css">
</head>
<body>
     <form action="login.php" method="post">
          <span style="padding: 15px;background: #5555556b; border-radius: 50px";><a href="../index.html">Back</a></span>
     	<h2>Welcome to Event Photography site Login page</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>