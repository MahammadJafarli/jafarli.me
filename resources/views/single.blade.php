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
<section id="navbar">
    <nav class="navbar navbar-default navbar-fixed-top" style="background: black;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ url('/images/logo1.png') }}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/#welcome">Home <div class="nav-border"></div></a></li>
                    <li><a href="/#about">About <div class="nav-border"></div></a></li>
                    <li><a href="/#services">Services <div class="nav-border"></div></a></li>
                    <li><a href="/#works">Portfolio <div class="nav-border"></div></a></li>
                    <li><a href="/#news">Blog <div class="nav-border"></div></a></li>
                    <li><a href="/#contact">Contact <div class="nav-border"></div></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>
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
