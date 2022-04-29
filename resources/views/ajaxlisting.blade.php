{{-- {{dd($listings['data'])}} --}}
<div class="container-fluid px-0">
    <div class="row mx-auto">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
            <div class="slideproducts">
                <div class="row mb-4">
                    <div class="col-md-7">
                        <h2>Top-rated around you</h2>
                    </div>
                    <div class="col-md-5">
                        <div class="filterselect d-flex justify-content-end">
                            <p>Filter:</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Highest Rated</option>
                                <option value="1">Nearest You</option>
                                <option value="2">Price - Low to High</option>
                                <option value="3">Price - High to Low</option>
                            </select>
                        </div>
                    </div>
                </div>

            @foreach ($listings['data'] as $boardroom)
            {{-- {{dd($boardroom)}} --}}
            <a href="{{'/api/listing_details/' . $boardroom['id'] }}">
                <div class="cardslider">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <div class="card position-relative">
                              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  </div>
                                  <div class="carousel-inner">
                                
                                    @php $key = 0;@endphp
 {{----    Foreach images issues ---}}
                                    @foreach ($boardroom['listing_gallery'] as $images)

                                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                        <img src="{{ asset('imgs/' . $boardroom['listing_gallery']['picture_name']) }}" >
                                    </div>
                                    @php $key++;@endphp
                                    @endforeach
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
                                <h5 class="card-title">{{$boardroom['name']}}</h5>
                                <p class="card-text">{{$boardroom['price_per_hour']}} &emsp; {{$boardroom['price_per_day']}}</p>
                                <h5 class="card-title">{{$boardroom['address']['formatted_address']}}</h5>
                                
                                
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
                              <a class="likes"><i class="fa fa-heart-o" aria-hidden="true"></i></a>				
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 px-0">

                            
            <div id="map">

            </div>
            <div class="homemap">
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.590006342726!2d-1.550836584595745!3d53.79678434857748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c1e7da1fdef%3A0xa7648511203ca6cb!2sToronto%20Square%2C%202%20City%20Square%2C%20Leeds%20LS1%202ES!5e0!3m2!1sen!2suk!4v1647347585454!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            </div>
        </div>
    </div>
</div>

<script>

	function initMap() {
		var locationArr = @json($locations);		

		var mainCoords = locationArr[0];

		var mapOptions = {
			center: mainCoords,
			zoom: 14
		};

        const map = new google.maps.Map(document.getElementById('map'), mapOptions);

		for (var i = 0; i < locationArr.length; i++) {
			var myCoords = locationArr[i];

			new google.maps.Marker({
				position: myCoords,
				map: map
			});	
		}
    }
</script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSuy4U3KFAhhK1gtshBsDJIiKDnK16upg&libraries=places&callback=initMap">
</script>