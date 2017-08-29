<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-sc
        ale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/particles/css/style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>


<!-- <a  data-scroll-nav="0">
  <div class="move_top text-center">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </div>
</a> -->


<!-- navbar sectionin bashlangici -->

<section id="navbar" class="navbar-fixed-top" style="background:black !important;height:70px;">>
    <div class="navbar_change">
        <div class="container">
            <header role="banner" class="container navbar navbar-fixed-top navbar-invers">
                <div class="navbar-header">
                    <button data-toggle="collapse-side" data-target="#nese" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                        <i class="fa fa-bars bar" aria-hidden="true"></i>
                    </button>
                    <div class="logo ">
                        <a href="{{ url('/') }}">
                            <img src="/images/logo1.png" alt="">
                        </a>
                    </div>
                </div>
                <div id="nese" class="side-collapse in">
                    <nav role="navigation" class="navbar-collapse">
                        <ul class="nav navbar-nav pull-right visible-md visible-lg ">
                            <li><a  data-scroll-nav="0">HOME<div class="nav-border"></div></a></li>
                            <li><a  data-scroll-nav="1">ABOUT <div class="nav-border"></div></a></li>
                            <li><a  data-scroll-nav="2">SERVICES <div class="nav-border"></div></a></li>
                            <li><a  data-scroll-nav="3">PORTFOLIO <div class="nav-border"></div></a></li>
                            <li><a  data-scroll-nav="4">NEWS <div class="nav-border"></div></a></li>
                            <li><a data-scroll-nav="5">CONTACT <div class="nav-border"></div></a></li>
                        </ul>
                        <ul class="nav navbar-nav visible-xs">
                            <li><a  data-scroll-nav="0">HOME</a></li>
                            <li><a  data-scroll-nav="1">ABOUT</a></li>
                            <li><a  data-scroll-nav="2">SERVICES</a></li>
                            <li><a  data-scroll-nav="3">PORTFOLIO</a></li>
                            <li><a  data-scroll-nav="4">NEWS</a></li>
                            <li><a data-scroll-nav="5">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>
</section>

{{--<section id="navbar" class="navbar-fixed-top"  style="background:black !important;height:57px;">--}}
    {{--<!-- <div class="navbar_change" style="background:black !important"> -->--}}
    {{--<div class="container">--}}
        {{--<header role="banner" class="container navbar navbar-fixed-top navbar-invers">--}}
            {{--<div class="navbar-header">--}}
                {{--<button data-toggle="collapse-side" data-target="#nese" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">--}}
                    {{--<i class="fa fa-bars bar" aria-hidden="true"></i>--}}
                {{--</button>--}}
                {{--<div class="logo ">--}}
                    {{--<a href="{{ url('/') }}"><img src="/images/logo1.png" alt=""></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="nese" class="side-collapse in">--}}
                {{--<nav role="navigation" class="navbar-collapse">--}}
                    {{--<ul class="nav navbar-nav pull-right visible-md visible-lg ">--}}
                        {{--<li><a href="index.html"  data-scroll-nav="0">HOME<div class="nav-border"></div></a></li>--}}
                        {{--<li><a href="index.html"  data-scroll-nav="1">ABOUT <div class="nav-border"></div></a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="2">SERVICES <div class="nav-border"></div></a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="3">PORTFOLIO <div class="nav-border"></div></a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="4">NEWS <div class="nav-border"></div></a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="5">CONTACT <div class="nav-border"></div></a></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="nav navbar-nav visible-xs">--}}
                        {{--<li><a href="index.html" data-scroll-nav="0">HOME</a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="1">ABOUT</a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="2">SERVICES</a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="3">PORTFOLIO</a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="4">NEWS</a></li>--}}
                        {{--<li><a href="index.html" data-scroll-nav="5">CONTACT</a></li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</header>--}}
    {{--</div>--}}
    {{--<!-- </div> -->--}}
{{--</section>--}}
<!-- navbar sectionun sonu -->

<!-- single_post sectionun bashlangici -->
<section id="single_post">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-8" >
                            <img src="{{ '/images/'.$post->post_image }}" class="img-responsive post_image" alt="">
                            <h4>{{ $post->post_title }}</h4>
                            <div class="new_info">
                                <p>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    Admin   /
                                </p>
                                <p>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ $post->updated_at->format('d.m.Y ') }}   /
                                </p>
                                <p>
                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                    {{ $post->category->category_name }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <p>{!!  $post->post_text !!}</p>

                    <div class="addthis_inline_share_toolbox" style="margin-top: 20px;"></div>
                </div>

            </div>
            <div class="col-md-3">
                <!-- news sectioniun bashlangici -->
                <section id="news_single" data-scroll-index="4">
                    <!-- <div class="container"> -->
                    <div class="row text-center">
                        <h6>LATEST NEWS</h6>
                        <div class="border_bottom"></div>
                    </div>
                    <div class="row">
                        @foreach($posts as $posts)
                            <div class="col-md-12 col-xs-12 col-sm-6 col-lg-12" style="margin-top:0px;">
                                <div class="new_single">
                                    <a href="{{ $post->id }}">
                                        <div class="new_img_single col-md-6 col-lg-6">
                                            <img src="{{ '/images/'.$posts->post_image }}" class="" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-6" style="padding-left: 0px;">
                                            <h5 class="new_title_single" style="margin-top: 0px;">{{ $posts->post_title }}</h5>
                                        </div>
                                        <!-- <p class="new_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p> -->
                                        <!-- <a href="#">
                                          <button type="button" class="btn pull-right" name="button">READ MORE</button>
                                        </a> -->
                                    </a>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <!-- </div> -->
                </section>
                <!-- news sectionun sonu -->
            </div>

        </div>
    </div>
</section>
<!-- single_post sectionun bashlangici -->



<!-- footer sectionun bashlangici -->
<footer>
    <div class="text-center">
        <div class="footer_top">
            <a href="{{ url('/')}}">
                <div class="logo2 text-center">
                    <img src="/images/logo2.png" alt="">
                </div>
            </a>
            <ul>
                @foreach($social as $social)
                    <li><a target="_blank" href="{{ $social->href }}"> {!! $social->icon !!} </a></li>
                @endforeach
            </ul>
        </div>
        <div class="footer_bottom">
            <p>Jafarli © 2017. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- footer sectionun sonu -->

<script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-599d34b6beefc187"></script>

<!-- <script type="text/javascript" src="assets/js/main.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
        var sideslider = $('[data-toggle=collapse-side]');
        var sel = sideslider.attr('data-target');
        var sel2 = sideslider.attr('data-target-2');
        sideslider.click(function(event){
            $(sel).toggleClass('in');
            $(sel2).toggleClass('out');
        });
    });
</script>
<!-- <script type="text/javascript" src="assets/js/scrollIt.js"></script> -->
</body>
</html>
