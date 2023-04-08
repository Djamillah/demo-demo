<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<link rel="stylesheet" href="./styles.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<script defer src="app.js"></script>
		<title>Boot-camp Portfolio</title>
	</head>
	<body>
		<div class="wrapper">
			<header class="header-nav">
				<nav class="nav">
					<h1 class="logo">Touch</h1>
					<ul class="nav-items">
						<li class="items"><a href="index.php">Home</a></li>
						<li class="items"><a href="#">About</a></li>
						<li class="items"><a href="contact.php">Contact</a></li>
						<li class="items"><a href="#">Services</a></li>
						<li class="items"><a href="#">Projects</a></li>
					</ul>
				</nav>
				<i class="fa-solid fa-burger" id="hamburger"></i>
			</header>

			<main class="hero">
				<div class="content-one">
					<h2 class="text-1">Hi, I'm Johnny.</h2>
					<h1 class="text-2">I build value through design.</h1>
					<h2 class="text-3"
						>I'm a British designer who love building digital
						products.</h2
					>
					<a href="#" class="learn-more"> Learn More</a>
				</div>

				<div class="content-two">
					<div class="img-container">
						<img
							src="./img/profile.jpg"
							width="400"
							height="600"
							alt=""
						/>
					</div>
				</div>
			</main>

			<section class="products">
				<div class="products-content-one">
					<h1 class="text-1">What I do</h1>
					<a href="#" class="learn-more"> Learn More</a>
				</div>
				<div class="card-container">
					<div class="card">
						<i class="fa-solid fa-briefcase"></i>
						<h1>Build Websites</h1>
						<p
							>Lorem ipsum dolor sit amet, consectetur
							adipisicing elit. Unde molestiae possimus
							illum, eius magni ducimus eligendi. Ut
							suscipit sequi corrupti.</p
						>

						<a href="#" class="read-more">READ MORE</a>
					</div>

					<div class="card">
						<i class="fa-solid fa-truck"></i>
						<h1>Render Services</h1>
						<p
							>Lorem ipsum dolor sit amet, consectetur
							adipisicing elit. Unde molestiae possimus
							illum, eius magni ducimus eligendi. Ut
							suscipit sequi corrupti.</p
						>

						<a href="#" class="read-more">READ MORE</a>
					</div>

					<div class="card">
						<i class="fa-solid fa-chalkboard-user"></i>
						<h1>Teach Students</h1>
						<p
							>Lorem ipsum dolor sit amet, consectetur
							adipisicing elit. Unde molestiae possimus
							illum, eius magni ducimus eligendi. Ut
							suscipit sequi corrupti.</p
						>

						<a href="#" class="read-more">READ MORE</a>
					</div>
				</div>
			</section>

			<footer class="footer">
				<div class="first">
					<h1>Touch</h1>
					<h2>Contact: +250789874753</h2>
					<h3>Privacy Policy</h3>
				</div>

				<div class="second">
					<ul>
						<li>Support</li>
						<li>Contact</li>
						<li>Services</li>
						<li>Products</li>
						<li>Business</li>
					</ul>

					<span class="copyright">Copyright @ 2023</span>
				</div>

				<div class="third">
					<form action="#">
						<input type="text" placeholder="Email Address" />
						<button class="btn">Subscribe</button>
					</form>
					<div class="socials">
						<i class="fa-brands fa-facebook"></i>
						<i class="fa-brands fa-youtube"></i>
						<i class="fa-brands fa-twitter"></i>
						<i class="fa-brands fa-github"></i>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
