<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Lultek | Admin Login</title>
		
		<link rel="stylesheet" href="assets/style/login.css" />
	</head>
	<body>
		<div class="container">
			<h1>
				<a href="/admin/">
					<div class="sqr"></div>
				Lultek</a>
				<hr class="hr-divider" />
			</h1>
			<div id="login-container">
				<form action="control/#/" method="post">
					<label>Användarnamn<br /><input type="text" name="username" /></label>
					<br />
					<label>Lösenord<br /><input type="text" name="password" /></label>
					<br />
					<a href="#">Lösenord?</a><input type="submit" name="login" value="Logga In" class="btn" />
				</form>
			</div>
		</div>
	</body>
</html>