<!DOCTYPE html>
<html>
<head>
	<title>GetAJob</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../fontawesome/css/all.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main-wrapper">
		<header>
			<h1><a href="index.php">GetAJob</a></h1>
			<div class="toggle-menu"><span></span></div>
		</header>

		<nav class="site-nav">
			<ul>
				<li><a href="login.php">login</a></li>
				<li><a href="register.php">register</a></li>
				<li><a href="skill.php">get a skill</a></li>
				<li><a href="certificate.php">get a certificate</a></li>
				<li><a href="about.php">about us</a></li>
				<li><a href="contact.php">contact us</a></li>
			</ul>
			<div class="close-menu"></div>
		</nav>

		<script>
			let toggleBar = document.querySelector('.toggle-menu')
			let menu = document.querySelector('.site-nav')
			let closeMenu = document.querySelector('.close-menu')

			toggleBar.addEventListener('click', showMenu)
			closeMenu.addEventListener('click', openMenu)

			function showMenu() {
				menu.style.left = "0px";
				setTimeout(function() {
					closeMenu.style.opacity = "0.5";
				}, 200)
			}
			function openMenu() {
					closeMenu.style.opacity = "0";
				setTimeout(function() {
					menu.style.left = "-100%";
				}, 200)
			}
		</script>

		<div class="main-content">