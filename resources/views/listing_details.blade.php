
@extends('layouts.master')
@section('content')
{{--{{$listing->listing_amenities->name}}--}}
{{-- {{ $listing->listing_capacities->description }}--}}
{{--{{dd($listing->name)}}--}}

{{-- {{dd($listing->pictures[0]->picture_name)}}  --}}
{{--{{ dd($listing->hosting_rules[0]->hosting_rule) }} --}}

<section class="brslider position-relative">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
         
       
        @foreach ($listing['data'] as $images)
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imgs/' . $images['listing_gallery']['picture_name']) }}" alt="brbanner" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/' . $images['listing_gallery']['picture_name'])  }}" alt="brbanner" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/' . $images['listing_gallery']['picture_name']) }}" alt="brbanner" class="d-block w-100" />
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    @endforeach
    {{--{{dd($listing)}}--}}
    <a class="request-to-book">THIS IS A <span class="text-white">REQUEST TO BOOK</span> BOARDROOM <i class="fa fa-question"></i></a>
</section>



<section class="brdetailmain pt-3 pb-5">
    <div class="container">
        <p class="gotosrchrslt"><i class="fa fa-angle-left"></i><a href="#srch-result">Search Results</a></p>
        <div class="row justify-content-between">
            <div class="col-md-7">
                <section class="address position-relative py-3">
                    <a class="likes" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    
                    <h4>{{ $listing['data'][0]['name'] }}</h4>
                    <ul class="fivestars m-0 p-0">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li class="starcounting">121</li>
                    </ul>
                    <p class="locnm mt-3">
                
                    {{ $listing['data'][0]['address']['formatted_address'] }}<br />
                   
                    </p>
                    <p class="locnm">Boardroom name: <b>{{ $listing['data'][0]['name'] }}</b></p>
                    <p>
                        <b>Room capacity:</b>{{ $listing['data'][0]['listing_capacity']['description'] }}<br />
                        <b>Minimum booking duration:</b> {{ $listing['data'][0]['min_hour'] }}
                    </p>
                    <p>
                    {{ $listing['data'][0]['description']}}
                
                       <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et nunc tristique, ornare enim ut, sagittis libero. Duis ac libero velit. Aliquam vitae hendrerit tortor, sit amet dapibus nisi. Vestibulum nulla
                        ante, vehicula vel turpis eu, congue ultricies nibh. Vestibulum eu purus augue. Nullam convallis quis ipsum vel pulvinar. In rhoncus diam sed efficitur iaculis. Integer et augue pretium, commodo sapien eu, ultricies
                        arcu. Praesent auctor metus dolor, in aliquet dui suscipit sed.-->
                    </p>
                </section>
              
                <section class="amenities-boxes detail-amen-box d-block position-relative pb-3">
                <h4>Amenities</h4>
                @php
                    if(count ($listing['data'][0]['listing_amenities']) == 0){ @endphp
                     <p>There is no amenities added</p>
                    @php } @endphp
                   
                    <div class="row mb-2">
                   {{dd($listing)}}
                    @foreach ($listing['data'][0]['listing_amenities'] as $images )
                        <div class="col-md-3">
                            <div class="amenitie-box">
                                <img src=" {{ asset('imgs/' . $images['listing_amenities']['icon']) }}" class="img-fluid" alt="amnts" />
                                <p>{{ $images['data']['name'] }}</p>
                                
                            </div>
                        </div>
                       
                        @endforeach
                    </div>
                    
                </section>

              
            </div>
           
        </div>
       
      
    </div>
</section>
@endsection



