
<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<div class="theme-main-menu theme-menu-one">
				<div class="logo"><a href="{{url('/')}}"><img src="{{asset('assets/images/chitra/logo.png')}}"  alt=""></a></div>
				<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
					<div class="container nav-container">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<i class="flaticon-setup"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item active dropdown">
									<a href="{{url('/')}}" class="nav-link dropdown-toggle">Home</a>
									
								</li>
								<li class="nav-item dropdown position-relative">
									<a class="nav-link dropdown-toggle" href="{{url('/about-us')}}">About Us</a>
									
								</li>
								<li class="nav-item dropdown position-relative">
									<a class="nav-link dropdown-toggle" href="{{route('courses')}}"  >Course</a>
									
								</li>
								<li class="nav-item dropdown position-relative">
									<a class="nav-link dropdown-toggle" href="https://drive.google.com/file/d/198qiObTr-CRNeIJdmmTkRrt5cXbHlYTi/view?usp=sharing"  target="_blank" >Portfolio</a>
									
								</li>
								<li class="nav-item dropdown position-relative">
									<a class="nav-link dropdown-toggle" href="{{route('gallery')}}"  >Gallery</a>
									
								</li>
								<li class="nav-item dropdown position-relative">
									<a class="nav-link dropdown-toggle" href="{{route('contact')}}"  >Contact</a>
									
								</li>
								
							</ul>
						</div>
					</div> <!-- /.container -->
				</nav> <!-- /#mega-menu-holder -->
				<div class="header-right-widget">
					<ul>
						<li class="call-us">Call Us <a href="+917439495482">+91 7439495482</a></li>
						
						<li><a href="{{route('contact')}}" class="contact-us white-shdw-button">Contact Us <i
									class="icon flaticon-next"></i></a></li>
					</ul>
				</div> <!-- /.header-right-widget -->
			</div> <!-- /.theme-main-menu -->