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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="/images/avatar.jpg" alt="" /></span>
							<a href="{{ route('welcome') }}"><h1 id="title">Vika</h1></a>
							<p>Stylist</p>
						</div>

                        @section('sidebar')
                    <!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Главная</span></a></li>
                                <li><a href="#about" id="about-link"><span class="icon solid fa-user">Обо мне</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Портфолио</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Контакты</span></a></li>
							</ul>
						</nav>
                        @show

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

                @yield('content')

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