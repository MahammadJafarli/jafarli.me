<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{--<title>JAFARLİ</title>--}}
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi">
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/particles/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="images/ikon.png" type="image/png" />
    <script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
</head>
<body>

<a  data-scroll-nav="0">
    <div class="move_top text-center">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
</a>


<!-- navbar sectionin bashlangici -->
<section id="navbar">
    <div class="navbar_change">
        <div class="container">
            <header role="banner" class="container navbar navbar-fixed-top navbar-invers">
                <div class="navbar-header">
                    <button data-toggle="collapse-side" data-target="#nese" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                        <i class="fa fa-bars bar" aria-hidden="true"></i>
                    </button>
                    <div class="logo ">
                        <a href="{{ url('/') }}">
                            <img src="images/logo1.png" alt="">
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
<!-- navbar sectionun sonu -->

<!-- header sectionun bashlangici -->
<section id="welcome" data-scroll-index="0">
    <div id="particles-js"></div>
    <div class="row text-center">
        <div class="center">
            <!-- <center> -->
            <h3 class="text-center">hi, i'm Mahammad</h3>
            <p class="text-center">i'm web developer</p>
            <button type="button" data-scroll-nav="3" class="btn" name="button">see my portfolio</button>
            <!-- </center> -->
        </div>
    </div>
</section>
<!-- header sectionun sonu -->

<!-- about sectionun bashlangici -->
<section id="about" data-scroll-index="1">
    <div class="container">
        <div class="row text-center">
            <h6>About</h6>
            <div class="border_bottom"></div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5" style="margin-top:30px;">
                <div class="row">
                        <div class="about">
                            <img src="{{ '/images/'.$about[1]->about_image }}" alt="" class="img-responsive about_img img-sircle "><br>
                            <h4 class="about_name ">{{ $about[1]->about_name }}</h4>
                            <p class="about_position ">{{ $about[1]->about_position }}</p>
                        </div>
                </div>
            </div>
            <div class="col-md-7 col-xs-12 col-sm-7 col-lg-7" style="margin-top:30px;">
                <h6 class="about_title">{{ $about[1]->about_title }}</h6>
                <p class="about_text">{{$about[1]->about_text }}</p>
                <button type="button" class="btn" data-scroll-nav="5" name="button">Contact Me</button>
                <a href="{{url('/downloadCV')}}">
                    <button type="button" class="btn" name="button">Download My CV</button>
                </a>
    </div>
    </div>
    </div>
</section>
<!-- about sectionun sonu -->

<!-- skills sectionun bashlangici -->
<section id="skills">
    <div class="container">
        <div class="row text-center">
            <h6>My Skills</h6>
            <div class="border_bottom"></div>
        </div>
        <div class="row" style="margin-top:40px;">
            <input type="hidden" id="skills" value="">
            @foreach($skill as $skill)

                <script>
                    if({{$skill->id}} == 1){
                        var value='';
                        $('#skills').attr('value',value+'.{{$skill->class}} ');
                    }else{
                        var value = $('#skills').attr('value');
                        $('#skills').attr('value',value+'.{{$skill->class}} ');
                    }
                </script>

                <div class="skil">
                    <p>{{ $skill->skill_name }} - {{ $skill->skill_percent }}% {{ $skill->skill_desc }} </p>

                    <div class="progress">
                        <div class="progress-bar {{$skill->class}}" role="progressbar" aria-valuenow="{{ $skill->skill_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background:black;">
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
<!-- skills sectionun sonu -->

<!-- services sectionun bashlangici -->
<section id="services" data-scroll-index="2">
    <div class="container">
        <div class="row text-center">
            <h6>Services</h6>
            <div class="border_bottom"></div>
        </div>
        <div class="row services">
            @foreach($service as $service)

                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="service text-center">
                        <div class="service_image ">
                            {!!  $service->service_icon !!}

                        </div>
                        <div class="service_name">
                            <b><h5>{{ $service->serrvice_name }}</h5></b>
                        </div>
                        <div class="service_desc">
                            <p>{!! $service->service_description !!}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>
<!-- services sectionun sonu -->

<!-- works sectionun bashlnagici -->
<section id="works" data-scroll-index="3">
    <div class="container" id="accordion">
        <div class="row text-center">
            <h6>Works</h6>
            <div class="border_bottom"></div>
        </div>
        <div class="row text-center">
            <ul  role="tablist">
                <li role="presentation" class="active"><a href="#collapse1" aria-controls="collapse1" role="tab" data-toggle="tab">All</a></li>
                <li role="presentation"><a href="#collapse2" aria-controls="collapse2" role="tab" data-toggle="tab">Full Stack</a></li>
                <li role="presentation"><a href="#collapse3" aria-controls="collapse3" role="tab" data-toggle="tab">Front End</a></li>
                <li role="presentation"><a href="#collapse4" aria-controls="collapse4" role="tab" data-toggle="tab">Back End</a></li>
                <li role="presentation"><a href="#collapse5" aria-controls="collapse5" role="tab" data-toggle="tab">Mobile App</a></li>
            </ul>
        </div>
        <div class="row tab-content text-center" >

                <div role="tabpanel" class="tab-pane active items text-center" id="collapse1">
                @foreach($portfolio as $portfolio)
                <div class="item ">
                        <img src="{{ '/images/'.$portfolio->posrtfolio_image }}" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption_inner">
                                <h3 class="caption_title">{{ $portfolio->portfolio_name }}</h3>
                                <p class="caption_desc">{{ $portfolio->description }}</p>
                                <a href="{{ $portfolio->link }}" target="_blank">
                                    <button class="btn link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>


            <div role="tabpanel" class="tab-pane items" id="collapse2">
                @foreach($portfolio->where('work_id','=','1')->get() as $portfolio)

                    <div class="item ">
                        <img src="{{ '/images/'.$portfolio->posrtfolio_image }}" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption_inner">
                                <h3 class="caption_title">{{ $portfolio->portfolio_name }}</h3>
                                <p class="caption_desc">{{ $portfolio->description }}</p>
                                <a href="{{ $portfolio->link }}" target="_blank">
                                    <button class="btn link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div role="tabpanel" class="tab-pane items" id="collapse3">
                @foreach($portfolio->where('work_id','=','2')->get() as $portfolio)
                    <div class="item ">
                        <img src="{{ '/images/'.$portfolio->posrtfolio_image }}" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption_inner">
                                <h3 class="caption_title">{{ $portfolio->portfolio_name }}</h3>
                                <p class="caption_desc">{{ $portfolio->description }}</p>
                                <a href="{{ $portfolio->link }}" target="_blank">
                                    <button class="btn link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div role="tabpanel" class="tab-pane items" id="collapse4">
                @foreach($portfolio->where('work_id','=','3')->get() as $portfolio)

                    <div class="item ">
                        <img src="{{ '/images/'.$portfolio->posrtfolio_image }}" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption_inner">
                                <h3 class="caption_title">{{ $portfolio->portfolio_name }}</h3>
                                <p class="caption_desc">{{ $portfolio->description }}</p>
                                <a href="{{ $portfolio->link }}" target="_blank">
                                    <button class="btn link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- works sectionunsonu -->

<!-- hire_me sectionun bashlnagici -->
<section id="hire_me">
    <div class="container">
        <div class="row" style="overflow:hidden">
            <h2 class="hear_title">DO YOU HAVE AN INTERESTING PROJECT?</h2>
            <h4 class="hear_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit lorem in ipsum efficitur laoreet. Suspendisse malesuada mi ligula, sit amet tristique ex lacinia vel.</h4>
            <button type="button" data-scroll-nav="4" class="btn hear_btn" name="button">HIRE ME !</button>
        </div>
    </div>
</section>
<!-- hire_me sectionun sonu -->

<!-- news sectioniun bashlangici -->
<section id="news" data-scroll-index="4">
    <div class="container">
        <div class="row text-center">
            <h6>LATEST NEWS</h6>
            <div class="border_bottom"></div>
        </div>
        <div class="row">
            @foreach($post as $post)

                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="new">
                        <a href="single/{{ $post->id }}">
                            <div class="new_img">
                                <img src="{{ '/images/'.$post->post_image }}" class="img-responsive" alt="">
                            </div>
                            <h5 class="new_title">{{ $post->post_title }}</h5>
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
                            <div class="new_text">{!! substr(($post->post_text),0,150) !!}</div>
                            <a href="single/{{ $post->id }}">
                                <button type="button" class="btn pull-right" name="button">READ MORE</button>
                            </a>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>
<!-- news sectionun sonu -->

<!-- contact sectionun bashlangici -->
<section id="contact" data-scroll-index="5">
    <div class="container">
        <div class="row text-center">
            <h6>Contact me</h6>
            <p>Please fill the form below. I will contact you as soon as possible.</p>
            <div class="border_bottom"></div>
        </div>
        <form action="https://formspree.io/mahammad.c@code.edu.az" method="POST">
            <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                        <input type="text"  name="name" id="name" value="" placeholder="Your Name">
                        {{--<p>{{$errors->first('name')}}</p>--}}
                        <input type="email"  name="email" id="email" value="" placeholder="Email">
                        <input type="text"  name="subject" id="subject" value="" placeholder="Subject">
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
                        <textarea name="message" id="message" placeholder="Your Message" rows="7" cols="80"></textarea>
                    </div>
            </div>
            <div class="row text-center">
                <button type="submit" class="btn form-send" name="button">Send Message</button>
            </div>
        </form>
    </div>
</section>
<!-- contac sectionun sonu -->

<!-- location sectionun bashlangici -->
<section id="location">
    <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.417820758766!2d49.8519139154811!3d40.37743147936967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d077c61fef3%3A0xfa4594c97092ca01!2sAF+Business+House!5e0!3m2!1sen!2sin!4v1498950632803" width="100%" height="250" background-color: rgb(229, 227, 223) frameborder="0" style="border:0" allowfullscreen></iframe>
            {{--{!! $contact[0]->google_map !!}--}}
        </div>
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <p>{!! $contact[0]->contact_text !!}</p>
            </div>
            <div class="col-md-5 col-xs-12">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $contact[0]->location }}</li>
                    <li><a href="+994515501945"><i class="fa fa-phone" aria-hidden="true"></i> {{ $contact[0]->telephone }}</a></li>
                    <li><a href="mailto:mahammad.c@code.edu.az"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $contact[0]->email }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- location sectionun sonu -->

<!-- footer sectionun bashlangici -->
<footer>
        <div class="text-center">
            <div class="footer_top">
                <a href="{{ url('/')}}">
                    <div class="logo2 text-center">
                        <img src="images/logo2.png" alt="">
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

<script type="text/javascript" src="assets/js/particles/particles.js"></script>
<script type="text/javascript" src="assets/js/particles/app.js"></script>
<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
<script>
    $(document).ready(function(){
        $(".tabs a").click(function(){
            $(this).tab('show');
        });
    });
</script>


</body>
</html>
<script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/pace.js"></script>
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/scrollIt.js"></script>
