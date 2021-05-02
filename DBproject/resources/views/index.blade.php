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
                            <li><a href="{{route('main')}}"><i class="fa fa-language"></i> Главная</a></li>
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

        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr style="color:white;">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Название
                                        </th>
                                        <th>
                                            Описание
                                        </th>
                                        <th>
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($professions as $profession)
                                    <tr>
                                        <td>
                                            {{$profession['id']}}
                                        </td>
                                        <td>
                                            {{$profession['name']}}
                                        </td>
                                        <td>
                                            Описание
                                        </td>
                                        <td>
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{route('crud.edit',  $profession->id)}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="{{route('crud.delete',  $profession->id)}}">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </section>

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