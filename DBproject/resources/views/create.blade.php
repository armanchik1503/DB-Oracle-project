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

                        </ul>
                    </div>
                </div>

            </div>
        </nav>


        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    @foreach ($profession as $prof)
                    <!-- form start -->
                    <form action="{{route('crud.update', $prof->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" value="{{$prof->name}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название категории">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Введите название категории">
                            </div>
                        </div>
                        
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

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