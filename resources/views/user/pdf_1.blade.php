{{-- @extends('user/pdf-app') --}}
@include('user/pdf-app')
@yield('head')
        <!-- START ABOUT US -->
		<section id="about_us" class="section_padding">
            <div class="container">
                <div class="section_heading wow zoomIn text-center">
					<h2> <span>Daftar</span></h2>
                </div>			
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content text-justify">
							<img src="{{ asset('assets/bumber/images/01/1.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content">
							<img src="{{ asset('assets/bumber/images/01/2.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
                </div> <!--- END ROW -->
                <div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content text-justify">
							<img src="{{ asset('assets/bumber/images/01/3.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content">
							<img src="{{ asset('assets/bumber/images/01/4.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
                </div> <!--- END ROW -->
                <div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content text-justify">
							<img src="{{ asset('assets/bumber/images/01/5.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content">
							<img src="{{ asset('assets/bumber/images/01/6.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
                </div> <!--- END ROW -->
                <div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content text-justify">
							<img src="{{ asset('assets/bumber/images/01/7.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content">
							<img src="{{ asset('assets/bumber/images/01/8.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
                </div> <!--- END ROW -->
                <div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content text-justify">
							<img src="{{ asset('assets/bumber/images/01/9.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
						<div class="about_content">
							<img src="{{ asset('assets/bumber/images/01/10.png') }}" class="img-responsive" alt="Responsive image">
						</div>
					</div> <!-- END COL -->
                </div> <!--- END ROW -->
                <div class="row text-center">
                    <div class="col-xs-12 col-md-12 text-center">
                        <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary text-center">Daftar Sekarang?</button></a>
                    </div>
                </div>
			</div> <!--- END CONTAINER -->
		</section>
        <!-- END ABOUT US -->
        <!-- START FOOTER -->
        
		@yield('foot')