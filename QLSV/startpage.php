<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title> Main Page | Welcome. </title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="images/logo-utt.png" width="300px">
		</div>
		<nav>
			<ul>
				<li><a href="startpage.php">Trang Chủ</a></li>
			</ul>
		</nav>
	</div>
</div>
</div>
<!----------------------------------------------------------------------------------------->
	<div class="account-page">
	<div class="container">
		<div class="row">
		<div class="col-2">
			<img src="images/utt1.jpg" width="100%">
			</div>
			
			
			<div class="col-2">
			<div class="form-container">
				<div class="form-btn">
				<span onClick="login()">Đăng nhập</span>
				<span onClick="register()">Đăng kí</span>
					<hr id="Indi">
				</div>
				
				<form id="LoginForm">
					<li>
					<a href="login.php">Login Form will appear.</a>
					</li>
				</form>
				<form id="RegForm">
					<li>
					<a href="signup.php">Sign Up From will appear.</a>
					</li>
				</form>
			</div>
			</div>
		</div>
		</div>
	</div>
	

	
<!------------------------------------------------------------------------------------>	
<div class="footer">
	<div class="container">
		<div class="row">
		<div class="footer-col-1">
			<h3>University Of Transport Technology.</h3>
			<p>54 Trieu Khuc, Thanh Xuan, Ha Noi.</p>
			<div class="app-logo">
				<img src="images/logo-utt.png">
			</div>
		</div>
		<div class="footer-col-2">
			<img src="images/logo-utt1.png">
			<p>Since 1945.<br>We hope to bringing you the best quality.</p>
		</div>
		<div class="footer-col-4">
			<h3>Contact.</h3>
			<ul>
				<li>Phone: 0243.854 4264. </li>
				<li>Fax: 0243.854 7695.</li>
				<a href="https://www.facebook.com/utt.vn">Facebook</a>
			</ul>
		</div>
		</div>
		<hr>
		<p class="copyright" align="center">Copyright by EASY TUTORIALS - 2021</p>
		</div>
		</div>
	<!------------------------------------------------------------>
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indi = document.getElementById("Indi");
		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indi.style.transform = "translateX(100px)";
			
		}
		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indi.style.transform = "translateX(0px)";	
		}
		
	</script>
</body>
</html>
