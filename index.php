<?php
	if (false){ // user loggedIn, go to dashboard
		header("Location : /dashboard.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quizosity | Open quizzing platform</title>
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="page">
		<header class="header">
			<div class="navbar">
				<div class="branding">
					<a href=""><img src="http://placehold.it/32x32" alt=""></a>
				</div>
				<div class="nav-container">
					<ul class="nav">
						<li><a href="/leaderboard">Leaderboard</a></li>
						<li><a href="#">Buzzing</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="base-container quiz-bg">
			<div class="login-container">
				<header class="form-head"><h2>Start quizzing now</h2></header>
				<div class="content-wrapper">
					<div class="content-form">
						<form method="post" id="formLogin" action="login" accept-charset="UTF-8">
							<input class="form-control" type="text" placeholder="Username" name="username">
							<input class="form-control" type="password" placeholder="Password" name="password">
							<label class="control checkbox">
								<input type="checkbox">
								<span class="checkbox-label">Remember me</span>
							</label>
							<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<p class="pull-right">Copyright &copy; Quizosity</p>
		</footer>
	</div>

	<!-- javascripts -->
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</body>
</html>