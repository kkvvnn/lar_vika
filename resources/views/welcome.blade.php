@extends('layouts.layout')

@section('content')

@section('sidebar')
    @parent

@endsection

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

			@if ($errors->any())
    			<div>
    			    <ul>
    			        @foreach ($errors->all() as $error)
    			            <li class="alert alert-danger">{{ $error }}</li>
    			        @endforeach
    			    </ul>
    			</div>
			@endif

			<form method="get" action="{{ route('message') }}">
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

@endsection