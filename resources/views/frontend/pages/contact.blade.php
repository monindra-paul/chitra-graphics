@extends('frontend.layout.app')
@section('mainsection')


			<!-- Contact Address Two -->
			<div class="contact-address-two">
				<div class="container">
					<div class="theme-title-one text-center">
						<div class="upper-title">Our Address</div>
						<h2 class="main-title">Don’t hesitate to contact us for <br>any information. </h2>
					</div> <!-- /.theme-title-one -->

					<div class="row">
						<div class="col-lg-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('assets/images/icon/icon59.svg')}}" alt=""></div>
								<h5>Our Location</h5>
								<p>Danmondi, 7563 King Meadow <br>Suite 896, USA</p>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('assets/images/icon/icon60.svg')}}" alt=""></div>
								<h5>Email & Phone</h5>
								<p><a href="mailto:chitragraphichub@gmail.com">chitragraphichub@gmail.com</a> <br><a href="tel:+918966863416">+91 89668 63416</a></p>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('assets/images/icon/icon61.svg')}}" alt=""></div>
								<h5>Get In Touch</h5>
								<p>Also find us social media below</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-address-two -->



			<!-- 
			=============================================
				Contact Us
			============================================== 
			-->
			<div class="contact-us-section contact-agency pt-150 mb-200">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-form">
				              	<form class="form form-style-two" id="contact-form" action="#" data-toggle="validator">
				                	<div class="messages"></div>
				                	<div class="controls">

										<div class="form-group">
					                        <input id="form_email" type="text" name="name" placeholder="Your Name*" required="required" data-error="Valid Name is required.">
					                        <div class="help-block with-errors"></div>
					                    </div>


					                    <div class="form-group">
					                        <input id="form_email" type="email" name="email" placeholder="Email Address*" required="required" data-error="Valid email is required.">
					                        <div class="help-block with-errors"></div>
					                    </div>

					                    <div class="form-group">
					                        <input id="form_sub" type="text" name="sub" placeholder="Subject*" required="required" data-error="Subject is required.">
					                        <div class="help-block with-errors"></div>
					                    </div>

					                    <div class="form-group">
					                    	<textarea id="form_message" name="message" class="form_message" placeholder="Your Message*" required="required" data-error="Please,leave us a message."></textarea>
					                    	<div class="help-block with-errors"></div>
					                    </div>
					                    <button class="theme-button-two">Send Message</button>
				                	</div> <!-- /.controls -->
				              	</form>
				            </div> <!-- /.contact-form -->
						</div> <!-- /.col- -->

						<div class="col-lg-6">
							<div class="contact-info">
								<h2 class="title">Don’t Hesitate to contact with us for any kind of information</h2>
								<p>Call us for imidiate support to this number</p>
								<a href="tel:+91 89668 63416" class="call">+91 89668 63416</a>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.contact-info -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-section -->

			
			

	<!-- Google Map -->
    <div id="google-map-two"><div class="map-canvas"></div></div>



@endsection