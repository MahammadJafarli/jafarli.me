<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">

   		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Site Title -->

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

        <!-- Site Logo -->
        <link href="{{ asset('Pictures/logo/icon.png') }}" rel="shortcut icon" type="image/x-icon">

        <!-- Fonts - Start includes Fonts From Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700" rel="stylesheet">

        <!-- Font ionicons css -->
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">

        <!-- Font awesome Core CSS -->
        <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') }}" media="screen" title="no title">

        <!-- Bootstrap css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- AniCollection library css -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!-- The New slick-theme.css if you want the default styling -->
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">

        <!-- Site css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Responsive css -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

    </head>

<body>

    <!-- Start Navbar Menu -->

    <div id="menuNav" class="menu-nav">

        <nav class="navbar navbar-default">

        <!-- Start Container 1 -->

          <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <!-- Start Logo Brand -->

                    <a class="navbar-brand navbar-brand-logo" href="index.html#">
                        <img src="Pictures/backgrounds/logo1.png" alt="">
                    </a>

                    <!-- End Logo Brand -->

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- Start Navbar Center -->

                    <ul class="nav navbar-nav navbar-nav-center">

                        <li><a href="/#Home" class="scroll-home">home</a></li>
                        <li><a href="/#About" class="scroll-about">about</a></li>
                        <li><a href="/#Services" class="scroll-services">services</a></li>
                        <li><a href="/#Resume" class="scroll-resume">resume</a></li>
                        <li><a href="/#Portfolio" class="scroll-portfolio">portfolio</a></li>
                        <li><a href="/#Contact" class="scroll-contact">contact</a></li>

                    </ul>

                    <!-- End Navbar Center -->

                    <!-- Start Navbar Right -->

                    <ul class="nav navbar-nav navbar-right">
                      @foreach($social as $social)
                        <li><a href="{{ $social->href }}" target="_blank"><i class="fa {!! $social->icon !!}" aria-hidden="true"></i></a></li>
                      @endforeach
                    </ul>

                    <!-- End Navbar Right -->

                </div>

          </div>

        <!-- End Container 1 -->

        </nav>

    </div>

    <!-- End Navbar Menu -->

    <!-- Start Header - Home -->

    <div id="header" class="header">

        <!-- Start SlideShow Picuters -->

        <div id="slideshow">

            <!-- Start Background Head -->

           <div class="imgHead">

                <!-- * img source -->

                <img class="img-responsive zooming"  src="Pictures/backgrounds/code.jpg" alt="Home Picture 1">

           </div>

            <!-- End Background Head -->

            <!-- Start Background Head -->

           <div class="imgHead">

                <!-- * img source -->

                <img class="zooming"  src="Pictures/backgrounds/code.jpg" alt="Home Picture 2">

           </div>

            <!-- End Background Head -->

            <!-- Start Background Head -->

           <div class="imgHead">

                <!-- * img source -->

                <img class="zooming"  src="Pictures/backgrounds/code.jpg" alt="Home Picture 3">

           </div>

            <!-- End Background Head -->

        </div>

        <!-- End SlideShow Picuters -->

        <!-- Start Overlay Header -->

        <div class="overlay-head"></div>

        <!-- End Overlay Header -->

        <!-- Start Head - Container -->

        <div class="container">

            <!-- Start Items Head -->

            <div class="head">

                <div class="itemsHead">

                    <!-- Start Welcome -->

                    <h3>Hello! i'm</h3>

                    <!-- End Welcome -->

                    <!-- Start Name Admin -->

                    <h2>{{ $about[0]->about_name }}</h2>

                    <!-- End Name Admin -->

                    <!-- Start Skills -->

                    <p>{{ $about[0]->about_position }}</p>

                    <!-- End Skills -->

                    <!-- Start buttons - Btn Work With ME & Btn My Portfolio -->

                    <button class="btn btnRed">work with me</button>
                    <button class="btn btnBlue">see my portfolio</button>

                    <!-- End buttons - Btn Work With ME & Btn My Portfolio -->

                </div>

            </div>

            <!-- End Items Head -->

        </div>

        <!-- End Head - Container -->

    </div>

    <!-- End Header - Home -->

	<!-- Start About -->

	<div id="about" class="about sectionPadding">

		<!-- Start Container About -->

		<div class="container">

			<!-- Start About Me -->

			<div class="aboutMe">

				<div class="row">

					<!-- Start Box Contents About -->

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 aboutBox">

						<!-- Start Information About -->

						<div class="container-fluid">

							<h2 class="titleSection">{{ $about[0]->about_title }}</h2>
							<hr class="line-title-left">
							<p>{{$about[0]->about_text }}</p>
              <a href="{{url('/downloadCV')}}" style="color:black;">
							       <button class="btn dow-cv">Download CV (PDF)</button>
              </a>
						</div>

						<!-- End Information About -->


					</div>

					<!-- End Box Contents About -->

					<!-- Start Pictures About -->

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 aboutPicture">

                        <!-- Start Container Pictures -->

                        <div class="container-fluid">

                            <div class="row">

                                <!-- Start Box Picture One -->

                                <div class="col-sm-6 col-md-6 col-lg-6 picone wow slideInLeft">

                                    <!-- * img source -->

                                    <!-- <img class="img-responsive" src="{{ '/images/'.$about[0]->about_image }}" alt="picture about me Mahammad Jafarli"> -->

                                </div>

                                <!-- End Box Picture One -->

                                <!-- Start Box Picture Two -->

                                <div class="col-sm-6 col-md-6 col-lg-6 pictwo wow slideInRight">

                                    <!-- * img source -->

                                    <img class="img-responsive" src="{{ '/images/'.$about[0]->about_image }}" alt="picture about me Mahammad Jafarli">

                                </div>

                                <!-- Start Box Picture Two -->

                            </div>

                        </div>

                        <!-- End Container Pictures -->

					</div>

					<!-- End Pictures About -->

				</div>

			</div>

			<!-- End About Me -->

		</div>

		<!-- End Container About -->

	</div>

	<!-- End About -->

	<!-- Start Services -->

	<div id="services" class="services sectionPadding">

		<!-- Start Title Section Services -->

		<div class="container">

			<div class="titles-section">

				<h2>my services</h2>
				<hr class="line-title-center">

			</div>

		</div>

		<!-- End Title Section Services -->

		<!-- Start Items Container Services -->

		<div class="container">

			<div class="row">
        @foreach($service as $service)
				<!-- Start box Services  -->

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-43 boxServices">

					<div class="item-services">

						{!!  $service->service_icon !!}
						<h2>{{ $service->serrvice_name }}</h2>
						<p>{!! $service->service_description !!}</p>

					</div>

				</div>

				<!-- End box Services  -->
        @endforeach

			</div>

		</div>

		<!-- End Items Container Services -->

	</div>

	<!-- End Services -->

    <!-- Start Resume -->

    <div id="resume" class="resume sectionPadding">

        <!-- Start Title Section Resume -->

        <div class="container">

			<div class="titles-section">

				<h2>my experience</h2>
				<hr class="line-title-center">

			</div>

		</div>

        <!-- End Title Section Resume -->

		<!-- Start Items Container Resume -->

        <div class="container">

            <div class="row">

                <!-- Start Box Resume 1 -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="resume-item">

                        <!-- Start Box Resume Left -->

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 box-resume-left">

                            <div class="resume-left-item">

                                <h2>Moorget Group</h2>
                                <p><span class="color-me">from</span> 28.08.2017 <span class="color-me"></span> </p>

                            </div>

                        </div>

                        <!-- End Box Resume Left -->

                        <!-- Start Box Resume Right -->

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 box-resume-right">

                            <div class="resume-right-item">

                                <h2>Full Stack Web Developer</h2>
                                <p></p>

                            </div>

                        </div>

                        <!-- End Box Resume Right -->

                    </div>

                </div>

                <!-- End Box Resume 1 -->

                <!-- Start Box Resume 2 -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="resume-item">

                        <!-- Start Box Resume Left -->

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 box-resume-left">

                            <div class="resume-left-item">

                                <h2>Ok Media</h2>
                                <p><span class="color-me">from</span> 10.04.2017 <span class="color-me">to</span>12.06.2017</p>

                            </div>

                        </div>

                        <!-- End Box Resume Left -->

                        <!-- Start Box Resume Right -->

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 box-resume-right">

                            <div class="resume-right-item">

                                <h2>Web developer</h2>
                                <p></p>

                            </div>

                        </div>

                        <!-- End Box Resume Right -->

                    </div>

                </div>

                <!-- End Box Resume 2 -->

                <!-- Start Box Resume 3 -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="resume-item">

                        <!-- Start Box Resume Left -->

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 box-resume-left">

                            <div class="resume-left-item">

                                <h2>Rahimoff Studio</h2>
                                <p><span class="color-me">from</span> 15.11.2016 <span class="color-me">to</span> 25.01.2017</p>

                            </div>

                        </div>

                        <!-- End Box Resume Left -->

                        <!-- Start Box Resume Right -->

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 box-resume-right">

                            <div class="resume-right-item">

                                <h2>Web Developer</h2>
                                <p class="last-item-circle">Intern</p>

                            </div>

                        </div>

                        <!-- End Box Resume Right -->

                    </div>

                </div>

                <!-- End Box Resume 3 -->

            </div>

        </div>

		<!-- End Items Container Resume -->

    </div>

    <!-- End Resume -->

	<!-- Start Portfolio -->

	<div id="portfolio" class="portfolio sectionPadding">

		<!-- Start Title Section Portfolio -->

		<div class="container">

			<div class="titles-section">

				<h2>my portfolio</h2>
				<hr class="line-title-center">
				<p></p>

			</div>

		</div>

		<!-- End Title Section Portfolio -->

		<!-- Start Contents Box Portfolio -->

		<div class="container">
			<div class="row">
        @foreach($portfolio as $portfolio)
				<!-- Start Box Portfolio  -->
				<div class="col-sm-4 col-md-4 col-lg-4 portfolioBox">
					<div class="portfolioItem">
						<!-- Start Picture Portfolio -->
						<div class="picturePortfolio">
							<!-- * img source -->
							<img class="img-responsive" src="{{ '/images/'.$portfolio->posrtfolio_image }}" alt="Jafarli Portfolio Picture">
						</div>
						<!-- End Picture Portfolio -->
						<!-- Start Information About Project -->
						<div class="infoPortfolio">
							<div class="infoProject">
								<h2 class="nameProject">{{ $portfolio->portfolio_name }}</h2>
								<p  class="projectInfoCategory">{{ $portfolio->work->work_name }}</p>
							</div>
						</div>
						<!-- End Information About Project -->
					</div>
				</div>
				<!-- End Box Portfolio  -->
        @endforeach
			</div>
		</div>
		<!-- End Contents Box Portfolio -->

	</div>

	<!-- End Portfolio -->

    <!-- Start Skills -->

    <div id="skills" class="skills">

        <!-- Start Overlay Skills -->

        <div class="overlaySkills"></div>

        <!-- End Overlay Skills -->

		<!-- Start Items Container Skills -->

        <div class="container sectionPaddingVertical">

            <div class="row">

                <!-- Start Box Items Skills Empty Field-->

                <div class="col-sm-6 col-md-6 col-lg-6"></div>

                <!-- End Box Items Skills Empty Field-->

                <!-- Start Box Items Skills -->

                <div class="col-sm-6 col-md-6 col-lg-6 boxItemsSkills">

                    <!-- Start Title Section Skills -->

                    <div class="itemsSkills">

                        <h2 class="titleSection">my Skills</h2>
                        <hr class="line-title-left">
                        <p>
                        </p>

                    </div>

                    <!-- End Title Section Skills -->

                    <!-- Start Items My Skills -->

                    <div class="items-progress">
                      @foreach($skill as $skill)
                        <!-- Start Box Progress -->

                        <div class="progress-contents">

                            <h3>{{ $skill->skill_name }}</h3>
                            <p>
                                {{ $skill->skill_desc }}
                            </p>
                            <span class="percent">{{ $skill->skill_percent }}%</span>

                            <div class="progress">

                              <div class="progress-bar percent-progress-bar-one" style="width:{{ $skill->skill_percent }}%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">

                                <span class="sr-only">70% Complete</span>

                              </div>

                            </div>

                        </div>

                        <!-- End Box Progress -->
                        @endforeach

                    </div>

                    <!-- End Items My Skills -->

                </div>

                <!-- End Box Items Skills -->

            </div>

        </div>

		<!-- End Items Container Skills -->
    </div>

    <!-- End Skills -->


    <!-- Start Contact Me -->

    <div id="contact" class="contact sectionPadding">

		<!-- Start Title Section Blogs -->

		<div class="container">

			<div class="titles-section">

				<h2>contact with me</h2>
				<hr class="line-title-center"><br />
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <p>Do you have a business or any kind of idea? Please, don’t forget about importance of webpages. User friendly and clearly coded webpage makes your business better than others, because customers will see your face in your webpage. That is why just connect me and I will give you excellence coded webpage.</p>

          </div>
        </div>
            </div>

		</div>

		<!-- End Title Section Blogs -->

        <!-- Start Container Contact -->

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box-contact-form">

                    <form action='https://formspree.io/mahammad.c@code.edu.az' class='form' method='POST'><input type='hidden' name='form-name' value='form 2' />

                        <input type="text" name="Name" id="u_name" class="form-control" placeholder="Your name">

                        <input type="email" name="Surname" id="u_email" class="form-control" placeholder="Your Surname">

                        <input type="tel" name="Telephone" id="u_phone" class="form-control" placeholder="Phone">

                        <input type="url" name="Email" id="u_website" class="form-control" placeholder="E-mail">

                        <textarea class="form-control" placeholder="Message"></textarea>

                        <button class="btn send-message" type="submit">Send Message</button>

                    </form>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box-info-contact">

                    <div class="info-contacts">

                        <div class="my-phone">

                            <i class="icon ion-ios-telephone"></i>
                            <h4 class="titles-sections-contacts">my phone</h4>
                            <p class="info-titles-contacts">{{ $contact[0]->telephone }}</p>

                        </div>

                        <div class="my-email">

                            <i class="icon ion-at"></i>
                            <h4 class="titles-sections-contacts">my e-mail</h4>
                            <p class="info-titles-contacts">{{ $contact[0]->email }}</p>

                        </div>

                        <div class="my-address">

                            <i class="icon ion-ios-location"></i>
                            <h4 class="titles-sections-contacts">my address</h4>
                            <p class="info-titles-contacts">{{ $contact[0]->location }}</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Container Contact -->

    </div>

    <!-- End Contact Me -->

    <!-- Start Footer -->

    <div id="footer" class="footer">

        <div class="container-fluid">

			<div class="social-media">

                    <ul>
                      @foreach($socials as $social)
                        <li><a href="{{ $social->href }}" target="_blank"><i class="wow fadeInUp fa {!! $social->icon !!}" data-wow-delay="0.5s"></i></a></li>
                        @endforeach
                    </ul>


            </div>

            <p class="wow fadeInUp" data-wow-delay="0.5s">&copy; 2018 , All Rights Reserved.</p>

        </div>

    </div>

    <!-- End Footer -->

    <!-- jQuery js -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- typed js -->
    <script src="{{ asset('js/typed.js') }}"></script>

    <!-- Slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!-- Wow js -->
    <script src="{{ asset('js/wow.js') }}"></script>

    <!-- nicescroll js -->
    <script src="{{ asset('js/nicescroll.min.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asste('js/custom.js') }}"></script>

</body>
</html>
