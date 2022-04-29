
<header class="menu-header">
	<div class="container-fluid">	
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="site-logo">
            
					<img src= "{{ asset ('imgs/jbrlogo.png') }}" class="img-fluid" alt="site-logo">
				</div>
			</div>
			<div class="col-md-7">
				
			</div>
			<div class="col-md-2">
				<ul class="menulist">
					<li><p class="username">Hello, Joseph</p></li>
					<li class="profileimg">
						<h1 class="usernameicon">J</h1>
					</li>
					<li class="menutoggle">
						<div class="dropdown dropdown-menu-end dropdown-menu-lg-start">
							<div class="dropbtn"><i class="fa fa-bars"></i></div>
							<div class="dropdown-content d-none">
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
							<div class="dropdown-content">
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



