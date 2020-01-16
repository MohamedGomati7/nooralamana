@extends('layout.main')
@section('content')

				<!-- Enar-page-banner ____________________________ -->
				<div class="Enar-page-banner">
					<div class="Enar-page-banner-opact">
						<div class="container">
							<div>
								<h1>Contact Us</h1>
								<ul>
									<li><span></span></li>
									<li><a href="index-3.html"x>Home</a></li>
									<li>/</li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.Enar-page-banner -->

			</div> <!-- /.banner-ad-menu -->
			
			<!-- Contact-us-section ____________________________ -->
			<section class="Contact-us-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-xs-12">
							<div class="Contact-us-form">
								<form action="" class="form-validation row" autocomplete="off">
									<div class="col-sm-6 col-xs-12"><input type="email" placeholder="Email Address*" name="email"></div>
									<div class="col-sm-6 col-xs-12"><input type="text" placeholder="Subject*" name="sub"></div>
									<div class="col-xs-12"><textarea placeholder="Your Comments*" name="message"></textarea></div>
									<div class="col-xs-12"><button class="hvr-bounce-to-right">Send Message</button></div>
								</form>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-xs-12">
							<div class="Contact-us-title-text">
								<h3>Don’t Hesitate to<br>contact with us for any<br>kind of information</h3>
								<span></span>
								<p>call us for immidiate support this number</p>
								<strong>Tel +218 21 340 7995</strong>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				

				<div class="Contact-us-Google-map" hidden>
					<!-- Google Map _______________________ -->
					<div id="map"></div>
				</div>
			</section>

			<!--Contact Form Validation Markup -->
			<!-- Contact alert -->
			<div class="alert-wrapper" id="alert-success">
				<div id="success">
					<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="wrapper">
		               	<p>Your message was sent successfully.</p>
		             </div>
		        </div>
		    </div> <!-- End of .alert-wrapper -->
		    <div class="alert-wrapper" id="alert-error">
		        <div id="error">
		           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
		           	<div class="wrapper">
		               	<p>Sorry!Something Went Wrong.</p>
		            </div>
		        </div>
		    </div> <!-- End of .alert-wrapper -->



		 @endsection