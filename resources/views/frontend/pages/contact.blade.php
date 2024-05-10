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
					<p>Near Tarakeswar Boys school, Tarakeswar, Hooghly, 712410</p>
				</div> <!-- /.address-block -->
			</div> <!-- /.col- -->
			<div class="col-lg-4">
				<div class="address-block">
					<div class="icon-box"><img src="{{asset('assets/images/icon/icon60.svg')}}" alt=""></div>
					<h5>Email & Phone</h5>
					<p><a href="mailto:chitragraphichub@gmail.com">chitragraphichub@gmail.com</a> <br><a
							href="tel:+91  7439495482">+91 7439495482</a></p>
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
					<form class="form form-style-two" id="contact-form" action="{{url('/contact-us')}}" method="post"
						data-toggle="validator">
						@csrf
						<div class="messages"></div>
						<div class="controls">



							<div class="form-group">
								@if ($errors->has('name'))
								<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif
								<input id="form_email" type="text" name="name" placeholder="Your Name*"
									data-error="Valid Name is required.">
								<div class="help-block with-errors"></div>
							</div>


							<div class="form-group">
								@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif
								<input id="form_email" type="email" name="email" placeholder="Email Address*"
									data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								@if ($errors->has('sub'))
								<span class="text-danger">{{ $errors->first('sub') }}</span>
								@endif
								<input id="form_sub" type="text" name="sub" placeholder="Subject*"
									data-error="Subject is required.">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								@if ($errors->has('message'))
								<span class="text-danger">{{ $errors->first('message') }}</span>
								@endif
								<textarea id="form_message" name="message" class="form_message"
									placeholder="Your Message*" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<button class="theme-button-two" type="submit">Send Message</button>
							@if(session('success'))
							<div class="alert alert-success">{{session('success')}}</div>
							@endif
						</div> <!-- /.controls -->
					</form>
				</div> <!-- /.contact-form -->
			</div> <!-- /.col- -->

			<div class="col-lg-6">
				<div class="contact-info">
					<h2 class="title">Don’t Hesitate to contact with us for any kind of information</h2>
					<p>Call us for imidiate support to this number</p>
					<a href="tel:+91  7439495482" class="call">+91 7439495482</a>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/company/chitra-graphic-textile-hub/" target="_blank"><i
									class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div> <!-- /.contact-info -->
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.contact-us-section -->




<!-- Google Map -->
<div id="google-map-two">
	<div class="map-canvas"><iframe
			src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3675.817352264958!2d88.01401367530968!3d22.883204579271585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDUyJzU5LjUiTiA4OMKwMDAnNTkuNyJF!5e0!3m2!1sen!2sin!4v1714722226354!5m2!1sen!2sin"
			width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>



@endsection