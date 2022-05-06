@extends('layouts.master')
@section('content')

<div class="saved-boardrooms py-5 px-5">
	<div class="container">
		<h4 class="saved-header">Saved</h4>
		<div class="saved-body">
			<div class="showhidebtn py-5 text-end">
				<a href="#show" id="show" style="display:none;">Show</a>
				<a href="#hide" id="hide" style="display:none;">Hide</a>
			</div>
			<div class="hidecontent text-center d-none">
				<p>You have no saved boardrooms.</p>
				<img src="imgs/faq-host.png" class="img-fluid" alt="find-boardroom"/> <br>
				<a href="#">FIND A BOARDROOM</a>
			</div>
			<div class="showcontent">
				<div class="cardslider">
						<div class="row mb-2">
							<div class="col-md-3">
								<div class="card position-relative">
								  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
									  <div class="carousel-indicators">
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
									  </div>
									  <div class="carousel-inner">
										<div class="carousel-item active">
										  <img src="imgs/austin-distel.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="imgs/austin-distel-1.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="imgs/austin-distel-2.jpg" class="d-block w-100" alt="...">
										</div>
									  </div>
									  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									  </button>
									  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									  </button>
									</div>
								  <div class="card-body">
									<h5 class="card-title">2216 Queen St. E</h5>
									<p class="card-text">$50/hr &emsp; $350/day</p>
									<ul class="fivestars m-0 p-0">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								  </div>
								  <a class="discavl">DISCOUNT AVAILABLE</a>						  
								  <a class="rdybook">READY TO BOOK</a>	
								  <a class="pprpln"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;1.1km</a>	
								  <a class="likes"><i class="fa fa-heart" aria-hidden="true"></i></a>				
								</div>
							</div>
							<div class="col-md-3">
							</div>
							<div class="col-md-3">
							</div>
							<div class="col-md-3">
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>	
@endsection

		