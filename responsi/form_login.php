<!DOCTYPE html>
<html>
<head>
	<title>Form login</title>
	<style type="text/css">
		body {
			background-image: url("bg1.jpg");
			background-size: cover;
			background-color: #cccccc;
			font-family: "Segoe UI";
		}
		#wrapper {
			background-color: rgba(255, 255, 255, 0.8);
			width: 400px;
			height: 440px;
			margin-top: 70px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 30px;
		}
		input[type=text], input[type=password] {
			border: 1px solid #ddd;
			padding: 10px;
			width: 95%;
			border-radius: 2px;
			outline: none;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		label, h1 {
			text-transform: uppercase;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 30px;
			color: #a62d23;
		}
		button {
			border-radius: 10px;
			padding: 10px;
			width: 120px;
			background-color: #a62d23;
			border: none;
			color: #fff;
			font-weight: bold;
		}
		.error {
			background-color: #f72a68;
			width: 400px;
			height: auto;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 4px;
			color: #fff;

		}
	</style>
</head>
<body>
	<div id="wrapper">
		<form method="POST" action="cek_login.php">
			<h1>form login</h1>
			<label>Username</label>
			<input type="text" name="id_user" placeholder="masukkan username" required="" autofocus="">
			<label>Password </label>
			<input type="password" name="paswd" placeholder="masukkan password" required="" >
			<label>Captcha</label><br>
			<img src='captcha.php' />
			<input name='captcha_code' type='text'>
			<button type="submit" name="submit">LOGIN</button>
		</form>
	</div>

		
		
</body>
</html>