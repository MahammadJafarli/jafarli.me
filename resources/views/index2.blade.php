<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="web, web developer, code, coding, programmer, programing, php, laravel, html, css, sass, bootstarp, materialize, javascript, js, jqquery, jq, mysql, responsive, portfolio, personal, corporate, business, parallax, creative, agency, Mahammad Jafarli, Mehemmed Ceferli, Məhəmməd Cəfərli">

    <!-- Title -->
    <title>{{ MetaTag::get('title') }}</title>

    {!! MetaTag::tag('description') !!}

    {!! MetaTag::tag('title') !!}

    {!! MetaTag::tag('image') !!}

    {!! MetaTag::openGraph() !!}

    {!! MetaTag::twitterCard() !!}

    <meta name="robots" content="index,follow">

    <meta name="robots" content="all">

    <meta name="author" content="Məhəmməd Cəfərli">

    <meta name="googlebot" content="index,follow,all">

    <link rel="shortcut icon" href="{{ url('images/ikon.png') }}" type="image/png" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:200,300,400,500,600,700,900" rel="stylesheet">

    <!-- Font awesome Core CSS -->
    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') }}" media="screen" title="no title">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/bootstrap/css/bootstrap.css') }}">

    <!-- magnific-popup CSS -->
    <link rel='stylesheet' href='http://d33wubrfki0l68.cloudfront.net/css/f7c33166984ffaa7725eb2f045126d33c71e651b/css/magnific-popup.css'/>

    <!-- owl carousel CSS -->
    <link rel='stylesheet' href='http://d33wubrfki0l68.cloudfront.net/bundles/fd06a7dbf6fcde7e689595d4b6f0a76ee00250ec.css'/>


    <!-- Custom style CSS -->
    <link rel='stylesheet' href='{{ url('assets/css/style2.css') }}'/>

    <!-- responsive CSS -->
    <link rel='stylesheet' href='http://d33wubrfki0l68.cloudfront.net/css/3c6fee99c4958f79318766956faef5b5bef5a28d/css/responsive.css'/>

    <!--[if lt IE 9]-->
    <script src='http://d33wubrfki0l68.cloudfront.net/js/1f551ad794ba616cbdeff4c3af350b88a85a559e/js/html5shiv.min.js'></script>
    <!--[endif]-->
</head>
<body>

<!-- ====== Preloader ======  -->
<div class="loading">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<!-- ======End Preloader ======  -->

<main>

    <!-- ====== Navgition ======  -->
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- logo -->
                <a class="navbar-brand" href="/" style="padding: 0px;">
                    <img src="{{ url('/images/logo1.png') }}" alt="logo" style="width: 200px;">
                </a>
            </div>

            <!-- Collect the nav links, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!-- links -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="demo-2.html#0" data-scroll-nav="0" class="active">Home</a></li>
                    <li><a href="demo-2.html#0" data-scroll-nav="1">About</a></li>
                    <li><a href="demo-2.html#0" data-scroll-nav="2">Services</a></li>
                    <li><a href="demo-2.html#0" data-scroll-nav="3">Work</a></li>
                    {{--<li><a href="demo-2.html#0" data-scroll-nav="4">Clients</a></li>--}}
                    {{--<li><a href="demo-2.html#0" data-scroll-nav="5">Blog</a></li>--}}
                    <li><a href="demo-2.html#0" data-scroll-nav="6">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <!-- ====== End Navgition ======  -->

    <!-- ====== Header ======  -->
    <header id="home" data-scroll-index="0" class="header" data-stellar-background-ratio="0.5">

        <!-- particles -->
        <div id="particles-js"></div>

        <!-- header content -->
        <div class="caption v-middle text-center">
            <h3>I'm Mahammad</h3>
            <h1 class="cd-headline clip">
                <span class="blc">I'm </span>
                <span class="cd-words-wrapper">
			              <b class="is-visible">Developer.</b>
			              <b>Creative.</b>
			            </span>
            </h1>
        </div>

        <div class="button-scroll" data-scrollTo="about"><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
    </header>
    <!-- ====== End Header ======  -->

    <!-- ====== hero ======  -->
    <section id="about" data-scroll-index="1" class="hero">
        <div class="container">

            <div class="row">

                <!-- hero block -->
                <div class="hero-block">

                    <div class="col-sm-6">
                        <div class="hero-item">
                            <h5 class="mb-20">{{ $about[0]->about_title }}</h5>
                            <p class="mb-20">{{$about[0]->about_text }}</p>
                            <a href="{{url('/downloadCV')}}">
                                <button><span><i class="fa fa-download" aria-hidden="true"></i></span> Resume</button>
                            </a>
                                <button data-scroll-nav="6">Hire Me</button>
                        </div>
                    </div>

                    <!-- skills -->
                    <div class="skills">
                        <div class="col-sm-6">
                            @foreach($skill as $skill)
                            <div class="item">
                                <h6>{{ $skill->skill_name }}</h6>
                                <div class="skills-progress"><span data-value='{{ $skill->skill_percent }}%'></span></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear-fix"></div>
    </section>
        <!-- services -->
    <section data-scroll-index="2" class="services section-padding">
            <div class="container">
                <!-- section header -->
                <div class="section-head text-center">
                    <h5 class="tit">Services</h5>
                </div>

                <div class="row">

                    <!-- services items -->
                    <div class="serv-row">
                        @foreach($service as $service)
                        <div class="col-md-4">
                            <div class="serv-item">
                                <span>{!!  $service->service_icon !!}</span>
                                <h6>{{ $service->serrvice_name }}</h6>
                                <p>{!! $service->service_description !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- ====== End hero ======  -->

    <!--====== Portfolio ======-->
    <section data-scroll-index="3" class="portfolio section-padding">

        <div class="container">

            <!-- section header -->
            <div class="section-head text-center">
                <h5 class="tit">My Works</h5>
            </div>
            <div class="row">

                <!-- filter links -->
                {{--<div class="filtering text-center mb-50">--}}
                    {{--<span data-filter='*' class="active">All</span>--}}
                    {{--<span data-filter='.full'>Full Stack<</span>--}}
                    {{--<span data-filter='.web'>Design</span>--}}
                    {{--<span data-filter='.photo'>Photo</span>--}}
                {{--</div>--}}

                <!-- gallery -->
                <div class="gallery text-center">

                    <!-- gallery item -->
                    @foreach($portfolio as $portfolio)
                    <div class="col-md-4 item-img">
                        <a href="{{ $portfolio->link }}" target="_blank">
                        <img src="{{ '/images/'.$portfolio->posrtfolio_image }}" alt="image">
                        <div class="item-img-overlay">
                            <span class="v"></span>
                            <span class="x"></span>
                            <div class="v-middle">
                                <h5>{{ $portfolio->portfolio_name }}</h5>
                                <h5><i>{{ $portfolio->description }}</i></h5>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--====== End Portfolio ======-->

    <!-- hire_me sectionun bashlnagici -->
    <section id="hire_me">
        <div class="container">
            <div class="row" style="overflow:hidden">
                <h2 class="hear_title">Do you have an interesting project?</h2>
                <h4 class="hear_text">Do you have a business or any kind of idea? Please, don’t forget about importance of webpages. User friendly and clearly coded webpage makes your business better than others, because customers will see your face in your webpage. That is why just connect me and I will give you excellence coded webpage.</h4>
                <button type="button" data-scroll-nav="6" class="btn hear_btn" name="button">HIRE ME !</button>
            </div>
        </div>
    </section>
    <!-- hire_me sectionun sonu -->

    <!--====== Clients ======-->
    {{--<section data-scroll-index="4" class="clients section-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<!-- clients carousel -->--}}
                {{--<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">--}}
                    {{--<div class="client-say text-center">--}}

                        {{--<h5 class="tit mb-30">Reviews</h5>--}}

                        {{--<div class="owl-carousel owl-theme">--}}

                            {{--<!-- client item -->--}}
                            {{--<div class="client-item text-center">--}}

                                {{--<p>Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue, risus utaliquam dapibus. Thanks!.</p>--}}

                                {{--<h6>___ John Doe, Google Inc. ___</h6>--}}
                            {{--</div>--}}

                            {{--<!-- client item -->--}}
                            {{--<div class="client-item text-center">--}}

                                {{--<p>Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue, risus utaliquam dapibus. Thanks!.</p>--}}

                                {{--<h6>___ John Doe, Google Inc. ___</h6>--}}
                            {{--</div>--}}

                            {{--<!-- client item -->--}}
                            {{--<div class="client-item text-center">--}}

                                {{--<p>Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue, risus utaliquam dapibus. Thanks!.</p>--}}

                                {{--<h6>___ John Doe, Google Inc. ___</h6>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--====== End Clients ======-->

    <!--====== Numbers ======-->
    {{--<div class="numbers section-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center">--}}

                {{--<!-- number items -->--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="numb-item">--}}
                        {{--<span class="icon-happy"></span>--}}
                        {{--<h3 class="counter">234</h3>--}}
                        {{--<p>HAPPY CLIENTS</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="numb-item">--}}
                        {{--<span class="icon-layers"></span>--}}
                        {{--<h3 class="counter">884</h3>--}}
                        {{--<p>COMPLETE PROJECT</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="numb-item">--}}
                        {{--<span class="icon-strategy"></span>--}}
                        {{--<h3 class="counter">536</h3>--}}
                        {{--<p>CUP OF COFFIE</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="numb-item">--}}
                        {{--<span class="icon-trophy"></span>--}}
                        {{--<h3 class="counter">7</h3>--}}
                        {{--<p>AWARDS</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--====== End Numbers ======-->

    <!--====== Blog ======-->
    {{--<section data-scroll-index="5" class="blog section-padding">--}}
        {{--<div class="container">--}}

            {{--<!-- section header -->--}}
            {{--<div class="section-head text-center">--}}
                {{--<h5 class="tit">Latest News</h5>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="owl-carousel owl-theme">--}}

                    {{--<!-- blog posts -->--}}
                    {{--@foreach($post as $post)--}}
                    {{--<div class="post">--}}
                        {{--<div class="img-post">--}}
                            {{--<img src="{{ '/images/'.$post->post_image }}" alt="image">--}}
                        {{--</div>--}}
                        {{--<div class="content-post">--}}
                            {{--<h6>{{ $post->post_title }}</h6>--}}
                            {{--<div class="date"><span><i class="fa fa-user" aria-hidden="true"></i></span> Admin / <span><i class="fa fa-calendar" aria-hidden="true"></i></span> {{ $post->updated_at->format('d.m.Y ') }}  / {{ $post->category->category_name }}</div>--}}
                            {{--<p>{!! substr(($post->post_text),0,150) !!}</p>--}}
                            {{--<a href='single/{{ $post->id }}'><span>Read More ..</span></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--====== End Blog ======-->

    <!--====== Contact ======-->
    <section data-scroll-index="6" class="contact section-padding">

        <div class="container">

            <!-- section header -->
            <div class="section-head text-center">
                <h5 class="tit">Say Hello</h5>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <!-- contact icfo -->
                    <div class="cont-info">

                        <!-- info items -->
                        <div class="info-item">
                            <div class="icon">
                                <span class="icon-map-pin"> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            </div>
                            <div class="info-content">
                                <h6>Address</h6>
                                <h5>{{ $contact[0]->location }}</h5>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon">
                                <span class="icon-phone"> <i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                            <div class="info-content">
                                <h6>Phone</h6>
                                <h5>{{ $contact[0]->telephone }}</h5>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon">
                                <span class="icon-envelope"> <i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            </div>
                            <div class="info-content">
                                <h6>E-mail</h6>
                                <h5>{{ $contact[0]->email }}</h5>
                            </div>
                        </div>

                        <div class="social-icon">
                            @foreach($social as $social)
                                <span><a href="{{ $social->href }}" target="_blank" style="color: black">{!! $social->icon !!}</a></span>
                                @endforeach
                        </div>

                    </div>
                </div>

                <div class="col-md-7">

                    <!-- form -->
                    <div class="main-form">
                        <!-- contact form -->
                        <form class='form'  action="https://formspree.io/mahammad.c@code.edu.az" method="POST" role='form'>
                            <input type='hidden' name='form-name' value='contact-form' />
                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name *" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email *" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message *" rows="4" required="required" data-error="Message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="submit" class="button" value="Send message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact ======-->

</main>

<!--====== Footer ======-->
<footer>
    <div class="container">
        <a href="{{ url('/')}}">
            <div class="logo2 text-center">
                <img src="images/logo2.png" alt="logo" style="width: 200px;margin-bottom: 30px;">
            </div>
        </a>
        {{--<div class="social-icon">--}}
            {{--@foreach($social as $social)--}}
                {{--<span><a href="{{ $social->href }}" target="_blank" style="color: black">{!! $social->icon !!}</a></span>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        <p>Copy Right &copy; Mahammad Jafarli | All Right Reserved.</p>
    </div>
</footer>
<!--====== End Footer ======-->



<!--====== js ======-->

<!-- jQuery -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/a9fe7c23a14ff9f77f7608e7bf728cfe80b396d3/js/jquery-3.0.0.min.js'></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

<!-- bootstrap -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/1ea10ffb97a77f33a792bb8b37cb6ae5de4dec8e/js/vendor/bootstrap.min.js'></script>

<!-- scrollIt -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/b56340b416d34bfb50d553e2dff5021cf2451e21/js/scrollit.min.js'></script>

<!-- magnific-popup -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/fc7275f61682fa1ea733c2987b43c46eda377256/js/jquery.magnific-popup.min.js'></script>

<!-- owl carousel -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/bb58fb45196bfdfd9264552de221742cf7d4b75a/js/owl.carousel.min.js'></script>

<!-- stellar js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/8fdb0d77da9a6b77397f438141d0af686517171b/js/jquery.stellar.min.js'></script>

<!-- animated.headline js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/ead063eb9e16077f77444fcdeb7ff0cb00da2279/js/type-headline.js'></script>

<!-- isotope.pkgd.min js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/5ffcda38920cf4fbcff71182c20641f2058aaa11/js/isotope.pkgd.min.js'></script>

<!-- particles.min js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/cba2d73026bfe17035faa36c196cb446f76c1504/tona/js/particles.min.js'></script>

<!-- app js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/2d17bf801a79a22fc04fd7a51f9134c00f6562c9/js/app.js'></script>

<!-- validator js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/8166dcc97a4c45dd4f117a8e9134a6b9ad1ad64a/js/validator.js'></script>

<!-- custom js -->
<script src='http://d33wubrfki0l68.cloudfront.net/js/b9e6dcae91b61a66682c8e68b2db0172961bc1f6/js/custom.js'></script>

</body>
</html>