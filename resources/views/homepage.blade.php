{{-- {{dd($listing[0]->pictures[0]->picture_name)}} --}}
{{--{{dd($listing)}}  --}}
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		 
		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
		
		<!---CSS link --->
		<link rel="stylesheet" href="css/nw-justboardrooms_style.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/nw-justboardrooms_style.css') }}">
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/> -->

		
		<!-- jQuery UI Datepicker -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<script>
			
		let $ = jQuery;
		$( function() {
			$( "#datepickerFrom" ).datepicker();
			
			
		} );

		$( function() {
			$( "#datepickerTo" ).datepicker();
		} );
		</script>

    
		
		<style type="text/css">
  
			/* Set the size of the div element 
			that contains the map */
			#map {
				height: 400px;
				width: 400px;
			}
			  
			h2 {
				color: #308d3e;
			}
		</style>
	
		
	</head>
<header class="menu-header">
	<div class="container-fluid">	
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="site-logo">
					<img src="imgs/jbrlogo.png" class="img-fluid" alt="site-logo">
				</div>
			</div>
			<div class="col-md-6">
				<ul class="menulist">
					<li class="profileimg">
						<img src="imgs/avatar-icon.png" class="img-fluid" alt="site-logo">
					</li>
					<li class="menutoggle">
						<div class="dropdown dropdown-menu-end dropdown-menu-lg-start">
							<div class="dropbtn"><i class="fa fa-bars"></i></div>
							<div class="dropdown-content">
								<a href="#login" data-bs-toggle="modal" data-bs-target="#loginModalForm">Login</a>
								<div class="modal fade" id="loginModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h2 class="modal-title" id="exampleModalLabel">Welcome to justboardrooms</h2>
												<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
											</div>
											<div class="modal-body">
												<form>
													<div class="mb-3">
														<label class="form-label">Email Address</label>
														<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
													</div>
													<div class="mb-3">
														<label class="form-label">Password</label>
														<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
													</div>
													<div class="mb-3 form-check">
														<input type="checkbox" class="form-check-input" id="rememberMe" />
														<label class="form-check-label" for="rememberMe">Remember me</label>
													</div>
													<div class="modal-footer d-block">
														<p class="float-left">Not yet account <a href="#">Sign Up</a></p>
														<button type="submit" class="btn float-right">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<a href="#signup">Sign Up</a>
								<!-- <div class="modal fade" id="signModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
									<!-- <div class="modal-dialog"> -->
										<!-- <div class="modal-content"> -->
											<!-- <div class="modal-header"> -->
												<!-- <h2 class="modal-title" id="exampleModalLabel">Welcome to justboardrooms</h2> -->
												<!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button> -->
											<!-- </div> -->
											<!-- <div class="modal-body"> -->
												<!-- <form> -->
													<!-- <div class="mb-3"> -->
														<!-- <label class="form-label">Email Address</label> -->
														<!-- <input type="text" class="form-control" id="username" name="username" placeholder="Username" /> -->
													<!-- </div> -->
													<!-- <div class="mb-3"> -->
														<!-- <label class="form-label">Password</label> -->
														<!-- <input type="password" class="form-control" id="password" name="password" placeholder="Password" /> -->
													<!-- </div> -->
													<!-- <div class="mb-3 form-check"> -->
														<!-- <input type="checkbox" class="form-check-input" id="rememberMe" /> -->
														<!-- <label class="form-check-label" for="rememberMe">Remember me</label> -->
													<!-- </div> -->
													<!-- <div class="modal-footer d-block"> -->
														<!-- <p class="float-left">Not yet account <a href="#">Sign Up</a></p> -->
														<!-- <button type="submit" class="btn float-right">Submit</button> -->
													<!-- </div> -->
												<!-- </form> -->
											<!-- </div> -->
										<!-- </div> -->
									<!-- </div> -->
								<!-- </div> -->
								<hr>
								<a href="#">List my boardroom</a>
								<a href="#">Help Center</a>
							</div>
							<div class="dropdown-content d-none">
								<a href="#">Dashboard</a>
								<a href="#">Messages</a>
								<a href="#">Saved</a>
								<hr>
								<a href="#">Account</a>
								<a href="#">Settings</a>
								<a href="#">List my boardroom</a>	
								<hr>
								<a href="#">Help Centre</a>
								<a href="#">Log out</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
<div class="homebanner position-relative">
	<img src="imgs/home-banner.jpg" class="img-fluid bannerimg" alt="site-banner">
	<div class="banner-box">
		<div class="opacitybox">
			<h2>Meetings<span class="orngdot">.</span><br> When and where <br>you want them<span class="orngdot">.</span></h2>
			<div class="row mb-2">
				<div class="col-md-6 position-relative">
					<input type="text" id="datepickerFrom" class="form-control calendar-icon" placeholder="When is your meeting start?*">
				</div>
     
				<div class="col-md-6 position-relative">
					<input type="text" id="datepickerTo" class="form-control calendar-icon" placeholder="When is your meeting end?*">
				</div>

				<div class="col-md-6 position-relative">
					<input type="time" id="check_in" class="form-control calendar-icon" placeholder="Check_In Time?*">
				</div>

				<div class="col-md-6 position-relative">
					<input type="time" id="check_out" class="form-control calendar-icon" placeholder="Check_Out Time?*">
				</div>

				<div class="col-md-6 position-relative">
					<input class="form-control location-icon" id="location-search" type="text" placeholder="Where would you like to meet?*">
					
					<input class="form-control locationoptn" id="Input" type="text" placeholder="Use current location">
				</div>
			</div>
{{--{{dd($listing)}} --}}
			<div class="row position-relative">
				<div class="col-md-4">
					<!-- <input class="form-control person-icon" id="room-capacity" type="text" placeholder="Room Capacity"> -->
					<select class="form-control person-icon" id="room-capacity" type="text" >
						<option value="">Select</option>
						@foreach ($listing['data'] as $roomCapacities)
							<option value="{{ $roomCapacities['description'] }}" >
								{{ $roomCapacities['listing_capacity']['description']}} 
							</option>
						@endforeach    
					</select>
					
					<div class="selectbox rmcap">
						<p>Select number of attendees</p>
						<p class="addsub">1 <i class="fa fa-minus" aria-hidden="true"></i> 30 <i class="fa fa-plus" aria-hidden="true"></i></p>
						<div class="prgrsbar"></div>
						<a href="#">Done</a>
					</div>
				</div>

			{{--{{dd($listing['data'][0]['price_per_hour'])}}--}}
				<div class="col-md-4">
				    <select class="form-control price-icon" id="search-price" type="text" >
						<option value="">Select price range</option>
						@foreach ($listing['data'] as $price)
							<option value="{{ $price['price_per_hour'] }}"> 
								{{ $price['price_per_hour']}} 
							</option>
						@endforeach    
					</select>
				</div>

				
				<div class="col-md-4">
					<input class="form-control amenities-icon" id="search-amenities" type="text" placeholder="Amenities">
					<div class="amenities-boxes">
						<h6 class="mb-3">Building</h6>
						<div class="row mb-2">
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Accessible-Icon.png" class="img-fluid" alt="amnts">
									<p>Accessibility</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="amenitie-box">
									<img src="imgs/Breakout.png" class="img-fluid" alt="amnts">
									<p>Breakout</p>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/whiteborad.png" class="img-fluid" alt="amnts">
									<p>Whiteboard</p>
								</div>							
							</div>
						</div>
						<div class="row mb-2">
							<div class="col-md-4">
								<div class="amenitie-box">
									<img src="imgs/Parking-Icon.png" class="img-fluid" alt="amnts">
									<p>Parking</p>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Reception.png" class="img-fluid" alt="amnts">
									<p>Reception</p>
								</div>								
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Washroom-icon.png" class="img-fluid" alt="amnts">
									<p>Washroom</p>
								</div>								
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-4">
								<div class="amenitie-box">
									<img src="imgs/AC.png" class="img-fluid" alt="amnts">
									<p>Air Conditioning</p>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Water.png" class="img-fluid" alt="amnts">
									<p>Water</p>
								</div>								
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Tea-Coffee.png" class="img-fluid" alt="amnts">
									<p>Tea/Coffee</p>
								</div>								
							</div>
						</div>
						<h6 class="mb-3">Technology</h6>
						<div class="row mb-2">
							<div class="col-md-4">
								<div class="amenitie-box">
									<img src="imgs/Icon-Gray-Wifi.png" class="img-fluid" alt="amnts">
									<p>Wifi</p>
								</div>
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Projector-icon.png" class="img-fluid" alt="amnts">
									<p>Projector</p>
								</div>								
							</div>
							<div class="col-md-4">	
								<div class="amenitie-box">
									<img src="imgs/Icon-Gray-TV.png" class="img-fluid" alt="amnts">
									<p>Flatscreen TV</p>
								</div>								
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-md-4">
								<div class="amenitie-box">
									<img src="imgs/Teleconference-icon.png" class="img-fluid" alt="amnts">
									<p>Teleconference</p>
								</div>
							</div>			
						</div>
						<center><a href="#">Done</a></center>
					</div>
				</div>
			</div>
		</div>
		<p class="required">*Required</p>
		<button class="btn" type="button" onclick="searchlisting()"><i class="fa fa-search"></i>Find My Boardroom</button>
	</div>
</div>
<section class="njbrhome py-5" id="listing-section">
	
</section>


<!--------------- footer --------------->
<div class="wrapper py-4" id="wrapper-footer-full">
    <div class="container" id="footer-full-content" tabindex="-1">
        <div class="row pt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-label nav-link p-0">
                            <img class="fdoter-logo" src="https://justboardrooms.com/wp-content/themes/understrap/images/logo.png" />
                        </div>
                        <div class="footer-social-icons pt-5 pb-3 d-md-flex d-none">
                            <a href="https://www.facebook.com/JustBoardrooms" target="_blank"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/fb-icon.png" /></a>
                            <a href="https://twitter.com/JustBoardrooms" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/twitter-icon.png" /></a>
                            <a href="https://www.pinterest.ca/JustBoardrooms/_saved/" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/pinterest-icon.png" /></a>
                            <a href="https://www.instagram.com/justboardrooms/" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/ig-icon.png" /></a>
                            <!-- <a href="https://www.linkedin.com/company/just-boardrooms" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/linkedin-icon.png" /></a> -->
                        </div>
                        <div class="footer-app-links text-md-left d-lg-none d-none">
                            Get the App
                            <a href="#"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/apple-logo.png" /></a>
                            <a href="https://play.google.com/store/apps/details?id=com.theturnlab.justboardrooms"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/android-logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-md-none d-lg-block">
                        <div class="row">
                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Just Boardrooms</h5>
                                <ul>
                                    <li><a title="About" href="#about" class="nav-link footer">About</a></li>
                                    <li><a title="Our Mission" href="#mission" class="nav-link footer">Mission</a></li>
                                    <li><a title="Management" href="#management" class="nav-link footer">Management</a></li>
                                    <li><a title="The Board" href="#board" class="nav-link footer">The Board</a></li>
                                    <li><a title="Partners" href="#carees" class="nav-link footer">Careers</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Contact Us</h5>
                                <ul>
                                    <li><a title="Hosting" href="#hosting" class="nav-link footer">Hosting</a></li>
                                    <li><a title="Booking" href="#booking" class="nav-link footer">Booking</a></li>
                                    <li><a title="Inquiry" href="#inquiry" class="nav-link footer">Inquiry</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Legal</h5>
                                <ul>
                                    <li><a title="Terms of Use" href="/terms-of-use/" class="nav-link footer">Terms of Use</a></li>
                                    <li><a title="Privacy Policy" href="/privacy-policy/" class="nav-link footer">Privacy Policy</a></li>
                                    <li><a title="Accessibility" href="/accessibility/" class="nav-link footer">Accessibility</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-4">
                        <h5 class="signup">Sign up for our Newsletter</h5>
                        <div class="mailchimp-signup-container">
                            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css" />
                            <div id="mc_embed_signup">
                                <form
                                    action="https://justboardrooms.us4.list-manage.com/subscribe/post?u=47fbd263886746c5654e1a761&amp;id=ca14ce9974"
                                    method="post"
                                    id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form"
                                    class="validate"
                                    target="_blank"
                                    onsubmit="submitUserForm();"
                                    novalidate="novalidate"
                                >
                                    <div id="mc_embed_signup_scroll row">
                                        <div class="col-12" style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_47fbd263886746c5654e1a761_ca14ce9974" tabindex="-1" value="" /></div>
                                        <div class="mc-field-group row">
                                            <div class="col-md-8 col-8 px-1">
                                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="    Email" aria-required="true" />
                                            </div>
                                            <div class="col-md-4 col-4 pl-1 px-md-1">
                                                <div class="clear">
                                                    <!-- <button class="g-recaptcha" data-sitekey="your_site_key" data-callback='onSubmit'>Submit</button> -->
                                                    <input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mce-responses" class="clear row"></div>
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6LfkeeocAAAAALPMakZjI7z_TXHxcYG0Uy2lLZcG"> -->
                                        <!-- <div style="width: 304px; height: 78px;"> -->
                                            <!-- <div> -->
                                                <!-- <iframe -->
                                                    <!-- title="reCAPTCHA" -->
                                                    <!-- src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LfkeeocAAAAALPMakZjI7z_TXHxcYG0Uy2lLZcG&amp;co=aHR0cHM6Ly9qdXN0Ym9hcmRyb29tcy5jb206NDQz&amp;hl=en&amp;v=85AXn53af-oJBEtL2o2WpAjZ&amp;size=normal&amp;cb=m57mr3pulmhs" -->
                                                    <!-- width="304" -->
                                                    <!-- height="78" -->
                                                    <!-- role="presentation" -->
                                                    <!-- name="a-1kvw0o7x4z2v" -->
                                                    <!-- frameborder="0" -->
                                                    <!-- scrolling="no" -->
                                                    <!-- sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" -->
                                                <!-- ></iframe> -->
                                            <!-- </div> -->
                                            <!-- <textarea -->
                                                <!-- id="g-recaptcha-response" -->
                                                <!-- name="g-recaptcha-response" -->
                                                <!-- class="g-recaptcha-response" -->
                                                <!-- style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;" -->
                                            <!-- ></textarea> -->
                                        <!-- </div> -->
                                        <!-- <iframe style="display: none;"></iframe> -->
                                    <!-- </div> -->
                                    <!-- <div class="response col-md-8" id="mce-error-response" style="display:none"></div>
                                        <div class="response col-md-8" id="mce-success-response" style="display:none"></div>
                                        <input type="hidden" id="captcha-response" name="captcha-response"/>
                                        <div id="captcha-error"></div> -->
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

                        <script>
                            function submitUserForm() {
                                console.log("form submitted");
                                //     var response = grecaptcha.getResponse();
                                //     if(response.length == 0) {
                                //         alert('Please complete the Captcha verification');
                                //         return false;
                                //     }
                                //     else {
                                //         return true;
                                //     }
                            }

                            // function verifyCaptcha() {
                            //     if (grecaptcha.getResponse() == "") {
                            //         alert("You can't proceed!");
                            //     } else {
                            //         alert("Thank you");
                            //     }
                            // }
                        </script>

                        <script type="text/javascript">
                            (function ($) {
                                window.fnames = new Array();
                                window.ftypes = new Array();
                                fnames[0] = "EMAIL";
                                ftypes[0] = "email";
                            })(jQuery);
                            var $mcj = jQuery.noConflict(true);
                        </script>
                        <!-- <img class="mobile-hide" src="https://justboardrooms.com/wp-content/themes/understrap/images/logo.png"> -->

                        <div class="row d-lg-none d-md-flex">
                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Just Boardrooms</h5>
                                <ul>
                                    <li><a title="about" href="#about" class="nav-link footer">About</a></li>
                                    <li><a title="Our Mission" href="#mission" class="nav-link footer">Mission</a></li>
                                    <li><a title="Management" href="#management" class="nav-link footer">Management</a></li>
                                    <li><a title="The Board" href="#board" class="nav-link footer">The Board</a></li>
                                    <!-- <li><a title="Partners" href="/about/" class="nav-link footer">Careers</a></li> -->
                                </ul>
                            </div>

                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Contact Us</h5>
                                <ul>
                                    <li><a title="Hosting" href="#hosting" class="nav-link footer">Hosting</a></li>
                                    <li><a title="Booking" href="#booking" class="nav-link footer">Booking</a></li>
                                    <li><a title="Inquiry" href="#inquiry" class="nav-link footer">Inquiry</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 footer-nav-list d-none d-md-block">
                                <h5>Legal</h5>
                                <ul>
                                    <li><a title="Terms of Use" href="/terms-of-use/" class="nav-link footer">Terms of Use</a></li>
                                    <li><a title="Privacy Policy" href="/privacy-policy/" class="nav-link footer">Privacy Policy</a></li>
                                    <li><a title="Accessibility" href="/accessibility/" class="nav-link footer">Accessibility</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- MOBILE NAV 1        -->
                        <div class="col-md-4 footer-nav-list mobile-nav d-md-none">
                            <a class="footer-expand" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown1" href="">
                                <div class="row">
                                    <div class="col-10">
                                        <h5>Just Boardrooms</h5>
                                    </div>
                                    <div class="col-2">
                                        <img class="mobile-chevron" src="https://justboardrooms.com/wp-content/themes/understrap/images/down-chevron.png" alt="" />
                                    </div>
                                </div>
                            </a>
                            <div id="navbarNavDropdown1" class="collapse">
                                <ul>
                                    <li><a title="About" href="#about" class="nav-link footer">About</a></li>
                                    <li><a title="Our Mission" href="#mission" class="nav-link footer">Mission</a></li>
                                    <li><a title="Management" href="#management" class="nav-link footer">Management</a></li>
                                    <li><a title="The Board" href="#board" class="nav-link footer">The Board</a></li>
                                    <!-- <li><a title="Partners" href="/about/" class="nav-link footer">Careers</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <!-- -->
                        <!-- MOBILE NAV 2 -->
                        <div class="col-md-4 footer-nav-list mobile-nav d-md-none">
                            <a class="footer-expand" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" href="">
                                <div class="row">
                                    <div class="col-10">
                                        <h5>Contact Us</h5>
                                    </div>
                                    <div class="col-2">
                                        <img class="mobile-chevron" src="https://justboardrooms.com/wp-content/themes/understrap/images/down-chevron.png" alt="" />
                                    </div>
                                </div>
                            </a>
                            <div id="navbarNavDropdown2" class="collapse">
                                <ul>
                                    <li><a title="Hosting" href="/contact?pre=hosting" class="nav-link footer">Hosting</a></li>
                                    <li><a title="Booking" href="/contact?pre=booking" class="nav-link footer">Booking</a></li>
                                    <li><a title="Inquiry" href="/contact?pre=inquiry" class="nav-link footer">Inquiry</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- -->
                        <!-- MOBILE NAV 3 -->
                        <div class="col-lg-4 footer-nav-list mobile-nav d-md-none">
                            <a class="footer-expand" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown3" href="">
                                <div class="row">
                                    <div class="col-10">
                                        <h5>Legal</h5>
                                    </div>
                                    <div class="col-2">
                                        <img class="mobile-chevron" src="https://justboardrooms.com/wp-content/themes/understrap/images/down-chevron.png" alt="" />
                                    </div>
                                </div>
                            </a>
                            <div id="navbarNavDropdown3" class="collapse">
                                <ul>
                                    <li><a title="Terms of Use" href="/terms-of-use/" class="nav-link footer">Terms of Use</a></li>
                                    <li><a title="Privacy Policy" href="/privacy-policy/" class="nav-link footer">Privacy Policy</a></li>
                                    <li><a title="Accessibility" href="/accessibility/" class="nav-link footer">Accessibility</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- -->
                    </div>
                </div>
                <div class="row">
                    <!--Mobile Social -->
                    <div class="footer-social-icons mobile-social p-5 d-md-none d-flex">
                        <a href="https://www.facebook.com/JustBoardrooms" target="_blank"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/fb-icon.png" /></a>
                        <a href="https://twitter.com/JustBoardrooms" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/twitter-icon.png" /></a>
                        <a href="https://www.pinterest.ca/JustBoardrooms/_saved/" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/pinterest-icon.png" /></a>
                        <a href="https://www.instagram.com/justboardrooms/" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/ig-icon.png" /></a>
                        <a href="https://www.linkedin.com/company/just-boardrooms" target="_blank"> <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/linkedin-icon.png" /></a>
                    </div>

                    <!-- <div class="footer-app-links mobile-social px-5 d-md-none">
                            Get the App 
							<a href="#"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/apple-logo.png"></a> <a href="https://play.google.com/store/apps/details?id=com.theturnlab.justboardrooms"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/android-logo.png"></a>
                    </div> -->

                    <div class="footer-payment-types mobile-social px-5 d-md-none">
                        <div class="row">
                            <span class="pl-2"> We Accept </span>
                            <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/visa.png" />
                            <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/mastercard.png" />
                            <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/amex.png" />
							<img src="imgs/Discover.png" class="img-fluid p-1" alt="..." />
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-md-3"></div>

                    <div class="footer-payment-types col-lg-3 col-md-12 text-md-center text-lg-left d-none d-md-block">
                        <span> We Accept </span>

                        <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/visa.png" />
                        <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/mastercard.png" />
						
						<img src="imgs/Discover.png" class="img-fluid p-1" alt="..." />
						
                        <img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/amex.png" />
						
                    </div>

                    <div class="footer-app-links col-lg-2 col-md-12 text-center px-0">
                        Get the App

                        <a href="#"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/apple-logo.png" /></a>
                        <a href="https://play.google.com/store/apps/details?id=com.theturnlab.justboardrooms"><img class="p-1" src="https://justboardrooms.com/wp-content/themes/understrap/images/android-logo.png" /></a>
                    </div>

                    <div class="footer-legal col-lg-4 col-md-12 text-end">
                        <a href="/terms-of-use">Terms of use</a> | <a href="/privacy-policy">Privacy Policy</a> &nbsp; © 2022 <a href="https://justboardrooms.com/">Just Boardrooms</a>
                    </div>
                    <!-- .footer-copyright -->
                </div>
                <!-- .footer-credits -->
            </div>
        </div>
    </div>
</div>



	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->	
	<script>    
		function getlisting() {   
			 
		   $.ajax({
			type:'post',
		   	url: @json(url('/api/getlisting')),
			data: {
				// 'name': name,
				// 'price_per_hour': price_per_hour ,
				// 'price_per_day': price_per_day ,
				// 'formatted_address': formatted_address,
				//"_token": @json(csrf_token()),
			},   
			success: function(response){
				$("#listing-section").html(response);
			}
		   });
		}

		function searchlisting() { 
		var startDate = $('#datepickerFrom').val();
		var endDate = $('#datepickerTo').val();
		var locationSearch = $("#location-search").val();
		var roomCapacity = $("#room-capacity").val();
		var price = $("#search-price").val();
		var amenities = $("#search-amenities").val();
		var checkIn = $("#check_in").val();
		var checkOut = $("#check_out").val();
		
		      
		   $.ajax({
			type:'post',
		   	url: @json(url('/api/getlisting')),
			data: {
				startDate: startDate,
				endDate: endDate,
				location: locationSearch,
				roomCapacity: roomCapacity,
				price: price,
				amenities: amenities,
				checkIn: checkIn,
				checkOut: checkOut
			},   
			success: function(response){
				$("#listing-section").html(response);
			}
		   });
		}

		$(document).ready(function(){
			getlisting();
		});



		/*$(document).ready(function(){
			$(".addtowishlist").live('click', function(evt) {
			var link_data = $(this).data('data');
			$.ajax({
				type: "POST",
				url: 'addtowishlist.php',
				data: ({product_id: link_data}),
				success: function(data) {
					if(data == '1')
					{
						$('a[data-data="' + link_data + '"] > i.whishstate').css({"color":"red"})
					}
					else{
						$('a[data-data="' + link_data + '"] > i.whishstate').css({"color":"red"})
					}
				}   
			});   
			}); 
		});*/
   </script>
	
</body>
</html>
