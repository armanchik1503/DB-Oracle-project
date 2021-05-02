<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>DB Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/css/styleBot.css')}}">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.fh5co-card-item {
			height: 500px;
		}

		.fh5co-card-item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.row-mt-15em {
			margin-top: 7em;
		}
	</style>
</head>

<body>

	<div class="gtco-loader"></div>

	<div id="page">


		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="#">GraduateInfoKZ <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="#"><i class="fa fa-language"></i> Главная</a></li>
							<li><a href="#"><i class="fa fa-language"></i> Контакты</a></li>
							<li><a href="{{route('univ')}}"><i class="fa fa-language"></i> Лучшие Университеты</a></li>
							<li><a href="{{route('crud.index')}}"><i class="fa fa-language"></i> Добавить новый пост</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>


		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(https://cdn.wallpapersafari.com/29/75/EILTjk.jpg)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">


						<div class="row row-mt-15em">
							<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1>Уверенно шагай в будущее вместе с Нами!</h1>
								<p>С помощью нашего сервиса ты сможешь узнать все лучшие специальности нашей прекрасной страны!</p>
							</div>
						</div>


					</div>
				</div>
			</div>
		</header>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Востребованные специальности</h2>
						<p>Популярные вакансии на данный момент</p>
					</div>
				</div>

				<div class="row">
					@foreach ($professions as $profession)
					<div class="col-lg-4 col-md-4 col-sm-6">

						<a href="" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"></div>
								<img src="https://img.freepik.com/free-vector/professional-people-work_24908-58136.jpg?size=626&ext=jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>{{$profession->name}}</h2>
								<p>Описание</p>
								<p><span class="btn btn-primary">Подробнее</span></p>
							</div>

						</a>

					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Почему наш сервис удобен?</h2>

					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>1</i>
							</span>
							<h3>Самые достоверные данные!</h3>
							<p>Мы постоянно работаем над тем что бы у нас была самая последняя и точная информация</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>2</i>
							</span>
							<h3>На рынке уже 10 лет!</h3>
							<p>Мы уже находимся на данном рынке более 10 лет!</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i>3</i>
							</span>
							<h3>Всегда хорошие отзывы!</h3>
							<p>Все наши клиенты всегда хорошо отзываются о нашем сервисе!</p>
						</div>
					</div>


				</div>
			</div>
		</div>





		<div id="ads-h2-links-adaptive" class="ads-h2-links-adaptive">
			<!-- content-first-h2-media --><ins class="adsbygoogle" data-ad-client="ca-pub-3787505096299533" data-ad-slot="3877431997" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<form style="margin-top:50px;margin-bottom: 50px;" id="contactform" method="POST" action="{{route('ajax')}}" class="validateform">
			@csrf
			<div style="display:flex;justify-content:center;">
				<h1>Выбери направление</h1>
			</div>
			<div class="filterable" style="display: flex; justify-content:center; margin-bottom:20px;margin-top:20px;">
				<div class="filterable-select-1" style="margin-right: 30px;">
					<p><strong>По направлению специальности:</strong></p>
					<select class="css-select" name="spec-direct" id="spec-direct-1">
						<option selected value="">Все</option>
						@foreach ($specialties as $specialty)
						<option value="{{$specialty->id}}">{{$specialty->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="filterable-select-2">
					<p><strong>По профильному предмету:</strong></p>
					<select class="css-select" name="subject-choose" id="subject-choose-4">
						<option selected value="">Все</option>
						@foreach($subjects as $subject)
						<option value="{{$subject->id}}">{{$subject->first_subject}} + {{$subject->second_subject}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</form>

		<table id="main-table" class="table" style="margin-bottom:50px;">
			<thead>
				<tr class="filters">
					<th>Код</th>
					<th>Наименование специальности</th>
					<th>Вуз</th>
				</tr>
			</thead>
			<tbody id="fbody">
				<tr>
					<td>5В010100</td>
					<td>Аграрная техника</td>
					<td>Республиканское государственное предприятие на праве хозяйственного ведения «Актюбинский региональный государственный университет имени К. Жубанова»</td>
				</tr>

			</tbody>
		</table>


	</div>


	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Подписаться</h2>
					<p>Подпишитесь и будьте в курсе последних новостей</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form action="{{route('sendInfo')}}" method="POST" enctype='multipart/form-data' class="form-inline" style="display: flex;justify-content: center;">
						@csrf
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="fname" class="sr-only">Имя</label>
								<input name="fname" class="form-control" id="fnmae" placeholder="Имя">
							</div>
							<div class="form-group">
								<label for="lname" class="sr-only">Фамилия</label>
								<input name="lname" class="form-control" id="lname" placeholder="Фамилия">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Почта</label>
								<input name="mail" class="form-control" id="mail" placeholder="Почта">
							</div>
							<div class="form-group">
								<label for="email" class="sr-only">Сообщение</label>
								<input name="message" class="form-control" id="message" placeholder="Сообщение">
							</div>
							<input type="file" name="image" class="form-controll" style="margin-bottom:10px;">
							<button type="submit" class="btn btn-default btn-block">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-pb-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>О Нас</h3>
						<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Наша команда:</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Arman Kaliakyn</a></li>
							<li><a href="#">Duman Talgatov</a></li>
							<li><a href="#">Adilkhan Sarkytov</a></li>
							<li><a href="#">Daniyal Amankeldi</a></li>
						</ul>
					</div>
				</div>

	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script>
		$(document).ready(function() {
			$('.filterable').click(function(e) {
				e.preventDefault();
				let id_spec = $('#subject-choose-4').val();
				let id_uni = $('#spec-direct-1').val();
				//console.log(selected);
				//console.log(val);
				$.ajax({
					url: "{{route('ajax')}}",
					type: 'POST',
					data: {
						id_spec: id_spec,
						id_uni: id_uni,
					},
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					success: function(data) {
						console.log(data);
						$('#fbody').prepend('<tr><td>5В010100</td><td>' + data.data[0].value + '</td><td>' + data.res[0].value + '</td></tr>');
					},
					error: function(error) {
						console.log(error);
					}
				});
			});
		});
	</script>
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="assets/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="assets/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/magnific-popup-options.js"></script>

	<!-- Datepicker -->
	<script src="assets/js/bootstrap-datepicker.min.js"></script>


	<!-- Main -->
	<script src="assets/js/main.js"></script>

</body>

</html>