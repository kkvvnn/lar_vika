<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Site</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="/images/avatar.jpg" alt="" /></span>
							<a href=""><h1 id="title">Vika</h1></a>
							<p>Stylist</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Главная</span></a></li>
                                <li><a href="#about" id="about-link"><span class="icon solid fa-user">Обо мне</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Портфолио</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Контакты</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
							<li><a href="#" class="icon brands fa-vk"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! I'm Vika</h2>
								<p>-</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Портфолио</a>
							</footer>

						</div>
					</section>

				

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Обо мне</h2>
							</header>

							<a href="#" class="image featured"><img src="/images/pic08.jpg" alt="" /></a>

							<p>Здесь будет информация обо мне.</p>

						</div>
					</section>


                <!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Портфолио</h2>
							</header>

							<p>Примеры моих работ.</p>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic02.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic03.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic04.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic05.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic06.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="/images/pic07.jpg" alt="" /></a>
										<header>
											<h3>----------</h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Контакты</h2>
							</header>

							<p>Томск.</p>

							<form method="post" action="#">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" value="Отправить сообщение" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; All rights reserved.</li>
                        <li>2021</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>