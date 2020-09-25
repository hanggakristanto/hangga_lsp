@section('head')
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>LSP DAQU</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i,800,800i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,600i,700,800" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/fonts/themify-icons.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/fonts/etline.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/lightbox.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/owl.theme.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/animate.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/bumber/css/responsive.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/bumber/css/css.css') }}">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			
			#myBtn a{
			  display: block;
			  position: fixed;
			  bottom: 20px;
			  right: 30px;
			  z-index: 99;
			  font-size: 18px;
			  border: none;
			  outline: none;
			  background-color: #ff3b3b;
			  color: white;
			  cursor: pointer;
			  padding: 10px;
			  border-radius: 44px;
			}
			
			#myBtn:hover {
			  background-color: #555;
			}
			.aja
			{
			width: 40px;
			height: 40px;
			}
		</style>
	</head>
	<body>
	
		<!-- START PRELOADER -->
			<!-- <div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div> -->
			</div>
		<!-- END PRELOADER -->
		<button id="myBtn"><a href="https://api.whatsapp.com/send?phone=+6287771221197&text=Assalamualaikum...%0A%0ASaya%20berminat%20mengikut%20Uji%20Sertifikasi%20di%20LSP%20Daarul%20Qur%27an%20...."><b>CHAT </b><img src="{{ asset('assets/bumber/images/wa.png') }}" class="aja"  style="width:5px, height:50px"	alt="image chat" class="img-circle"></a> </button>
	
		<!-- START NAVBAR -->
			<div class="navbar navbar-default navbar-fixed-top menu-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img class="img-responsive" src="{{ asset('assets/bumber/images/ds.png') }}">
							<img class="img-responsive" src="{{ asset('assets/bumber/images/12.png') }}">
						</a>
					</div>
					<div class="navbar-collapse collapse">
						<nav>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{'/'}}"><b>Home</b></a></li>
								<li><a href="{{'/#team'}}"><b>Profil</b></a></li>
								<li><a href="{{'/#daqu'}}"><b>Seputar DaQu</b></a></li>
								<li><a href="{{'/#portfolio'}}"><b>Skema Sertifikasi</b></a></li>
								<li><a href="{{'/#daftar'}}"><b>Daftar</b></a></li>	
								<li><a href="{{'/#contact'}}"><b>Kontak</b></a></li>
							</ul>
						</nav>
					</div> 
				</div><!--- END CONTAINER -->
			</div> 
		<!-- END NAVBAR -->	
		
		<!-- START HOME -->
			<br><br><br>
        <!-- END  HOME DESIGN -->
        
        
        @endsection

        @section('foot')
        <div class="copyright">
            <div class="copyright wow zoomIn text-center">
                <div class="copy_text">
                    <p>Copyright © 2020 LSP DAQU All Rights Reserved</p>
                </div>
            </div>
        </div> 
        
    <!-- END FOOTER -->
    
    <!-- Latest jQuery -->
    
    <script src="{{ asset('assets/bumber/js/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/modernizr-2.8.3.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/jquery.mixitup.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/lightbox.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/jquery.inview.min.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/waypoints.min.js') }}"></script>
		<!-- <script src="js/wow.min.js"></script> -->
		<script src="{{ asset('assets/bumber/js/scrolltopcontrol.js') }}"></script>
		<!-- <script src="js/SmoothScroll.js"></script> -->
		<script src="{{ asset('assets/bumber/js/form-contact.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/bumber/js/main.js') }}"></script>
    <script>
        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
    </script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "block";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
</body>
</html>	
@endsection