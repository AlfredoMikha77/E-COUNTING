<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="assets/logo.jpg" />
  <link rel="stylesheet" href="css/login.css" >
</head>
<body>
  <div class="container">
     <header>
	  <nav>
	    <div class="logo">
		 <img src="assets/logo.jpg" alt="" />
	    </div>
	
	    <label for="click" class="menu-btn">
	       <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Categories</a></li>
		<li><a href="login.php" class="btn_login">Login</a></li>
	    </ul>
        </nav>
	</header>
	<main>
	  <div class="center">
	    <div class="form-login">
		 <h3>Login</h3>
		 <form action="Login-proses.php" method="post">
		   <input class="input" type="text" name="username"
			    placeholder="Username" />
	         <input class="input" type="password" name="password"
			    placeholder="Password" />
		   <button type="submit" class="btn_login" name="login"  
                      id="login"> Login
		   </button>
		 </form>
		 <a href="Register.php" class="link-register">
                  Register Disini</a>
	    </div>
	  </div>
	</main>
   </div>
</body>
</html>
