 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>My blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('Flatfy/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="{{ URL::asset('Flatfy/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="{{ URL::asset('Flatfy/css/general.css') }}" rel="stylesheet">

	 <!-- Owl-Carousel -->
    <link href="{{ URL::asset('Flatfy/css/custom.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('Flatfy/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('Flatfy/css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('Flatfy/css/style.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('Flatfy/css/animate.css') }}" rel="stylesheet">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{ URL::asset('Flatfy/css/magnific-popup.css') }}">

	<script src="{{ URL::asset('Flatfy/js/modernizr-2.8.3.min.js') }}"></script>

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">ZaoOoza</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.8s">street magic</h3>
		</div>
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down ">
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#content"> <img class="img_scroll" src="{{ URL::asset('Flatfy/img/icon/circle.png') }}" alt=""> </a>
			</div>
		</div>
    </div>

	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Up!</a>
				<a class="navbar-brand" href="{{ url('/home') }}">Home</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">

					<li class="menuItem"><a href="#articles">Articles</a></li>
					<li class="menuItem"><a href="#contact">Contact</a></li>
					<li class="menuItem"><a href="{{ url('/adminzone') }}">Adminzone</a></li>

					<!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

				</ul>
			</div>

		</div>
	</nav>

	<!-- Articles -->
	<div id="content">
	@yield('content')
	</div>



	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center white">
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Subscribe to our Newsletter</h2>
										<form>
											<p><label>Your Email Address</label><input type="text"/></p>
											<p><button>Subscribe me</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Us</h2>
				<p class="lead" style="margin-top:0">for suggestions and wishes</p>
			</div>

			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>

			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Office Location</h3>
					<p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">New York City<br>
					504 Battery Drive</a><br>
					Phone: XXX-XXX-XXXX<br>
					Fax: XXX-XXX-YYYY</p>
					</address>

					<h3>Social</h3>
					<li class="social">
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a>
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>



    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Nod Ya Head!</h3>
            <p>Black Suits Comin'</p>
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Flatfy Theme</h3>
              <ul>
                <li>Laravel 5.2</li>
                <li>PHP 7.0</li>
                <li>Bootstrap 3</li>
              </ul>
              Bernasovsky, 2016
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ URL::asset('Flatfy/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ URL::asset('Flatfy/js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('Flatfy/js/owl.carousel.js') }}"></script>
	<script src="{{ URL::asset('Flatfy/js/script.js')}}"></script>
	<!-- StikyMenu -->
	<script src="{{ URL::asset('Flatfy/js/stickUp.min.js') }}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();

		});
	  });

	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ URL::asset('Flatfy/js/jquery.corner.js') }}"></script>
	<script src="{{ URL::asset('Flatfy/js/wow.min.js') }}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ URL::asset('Flatfy/js/classie.js')}}"></script>
	<script src="{{ URL::asset('Flatfy/js/uiMorphingButton_inflow.js') }}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ URL::asset('Flatfy/js/jquery.magnific-popup.js') }}"></script>
</body>

</html>
