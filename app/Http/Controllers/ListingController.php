<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Listing;
use App\Models\Booking;
use App\Models\Address;
use App\Models\ListingGallery;
use App\Models\ListingCapacity;
use App\Models\Amenity;
use App\Models\HostingRule;
use App\Models\ListingCalender;
use Illuminate\Support\Facades\Http;


class ListingController extends Controller
{
    public function index(){
        $data = ' {
            "data": [{
                    "id": 30,
                    "user_id": 3,
                    "name": "Hudson",
                    "description": "Temporibus voluptate officia repudiandae duis",
                    "picture": null,
                    "price_per_hour": 400,
                    "per_hour_rate": null,
                    "price_per_day": null,
                    "per_day_rate": null,
                    "review_stars": null,
                    "listing_capacity_id": 1,
                    "status": 1,
                    "half_day_discount": null,
                    "half_discount_rate": null,
                    "full_day_discount": null,
                    "full_discount_rate": null,
                    "hst_check": null,
                    "sale_tax": null,
                    "full_day_start_time": null,
                    "full_day_end_time": null,
                    "min_hour": "3hour",
                    "advance_notice": null,
                    "hosting_instruction": null,
                    "cleaning_fee": null,
                    "cleaning_fee_percent": null,
                    "step": 2,
                    "sync_token": null,
                    "is_first_listing": null,
                    "currency": null,
                    "listing_type": null,
                    "address_id": 28,
                    "created_at": "2022-03-30T12:47:11.000000Z",
                    "updated_at": "2022-03-30T12:47:22.000000Z",
                    "capacityNEW": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "address": {
                        "id": 28,
                        "listing_id": 30,
                        "formatted_address": "chandigarh",
                        "postal_code": null,
                        "lat": "23.259933",
                        "lng": "77.412613",
                        "building_name": "Jhon",
                        "intersection_a": null,
                        "intersection_b": null,
                        "address": "chandigarh",
                        "city": "chandigarh",
                        "province": "chandigarh",
                        "created_at": "2022-03-30T12:47:11.000000Z",
                        "updated_at": "2022-03-30T12:47:11.000000Z"
                    },
                    "listing_gallery": [{
                        "id": 21,
                        "listing_id": 30,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim.785.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T11:22:35.000000Z",
                        "updated_at": "2022-03-23T11:22:35.000000Z"
                    }],
                    "listing_amenities": [{
                            "id": 2,
                            "name": "Air Conditioning",
                            "icon": "Air conditioning.png",
                            "description": "",
                            "icon_1": "air_conditioning",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 2
                            }
                        },
                        {
                            "id": 3,
                            "name": "Breakout Space",
                            "icon": "Breakout.png",
                            "description": "",
                            "icon_1": "Breakout",
                            "type": "boardroom",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 3
                            }
                        },
                        {
                            "id": 5,
                            "name": "Reception",
                            "icon": "Reception.png",
                            "description": "",
                            "icon_1": "Reception",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 5
                            }
                        },
                        {
                            "id": 8,
                            "name": "Washroom",
                            "icon": "Washroom-icon.png",
                            "description": "",
                            "icon_1": "washroom",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 8
                            }
                        },
                        {
                            "id": 1,
                            "name": "Accessibility Friendly",
                            "icon": "Accessible.png",
                            "description": "",
                            "icon_1": "Accessible",
                            "type": "boardroom",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 1
                            }
                        },
                        {
                            "id": 6,
                            "name": "Teleconference",
                            "icon": "Teleconference.png",
                            "description": "",
                            "icon_1": "Teleconference",
                            "type": "technology",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 6
                            }
                        }
                    ],
                    "listing_capacity": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "pictures": [{
                        "id": 21,
                        "listing_id": 30,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim.785.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T11:22:35.000000Z",
                        "updated_at": "2022-03-23T11:22:35.000000Z"
                    }]
                },
                {
                    "id": 31,
                    "user_id": 3,
                    "name": "Clara",
                    "description": "Temporibus voluptate officia repudiandae duis",
                    "picture": "austin-distel.jpg",
                    "price_per_hour": 200,
                    "per_hour_rate": null,
                    "price_per_day": null,
                    "per_day_rate": null,
                    "review_stars": null,
                    "listing_capacity_id": 1,
                    "status": 1,
                    "half_day_discount": null,
                    "half_discount_rate": null,
                    "full_day_discount": null,
                    "full_discount_rate": null,
                    "hst_check": null,
                    "sale_tax": null,
                    "full_day_start_time": null,
                    "full_day_end_time": null,
                    "min_hour": "1hour",
                    "advance_notice": null,
                    "hosting_instruction": null,
                    "cleaning_fee": null,
                    "cleaning_fee_percent": null,
                    "step": 2,
                    "sync_token": null,
                    "is_first_listing": null,
                    "currency": null,
                    "listing_type": null,
                    "address_id": 29,
                    "created_at": "2022-03-30T12:47:11.000000Z",
                    "updated_at": "2022-03-30T12:47:22.000000Z",
                    "capacityNEW": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "address": {
                        "id": 29,
                        "listing_id": 31,
                        "formatted_address": "Canada",
                        "postal_code": null,
                        "lat": "56.130366",
                        "lng": "-106.346771",
                        "building_name": "Jhon",
                        "intersection_a": null,
                        "intersection_b": null,
                        "address": "Cannada",
                        "city": "Canada",
                        "province": "Canada",
                        "created_at": "2022-03-30T12:47:11.000000Z",
                        "updated_at": "2022-03-30T12:47:11.000000Z"
                    },
                    "listing_gallery": [{
                        "id": 22,
                        "listing_id": 31,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim (1).463.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T13:11:16.000000Z",
                        "updated_at": "2022-03-23T13:11:16.000000Z"
                    }],
                    "listing_amenities": [],
                    "listing_capacity": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "pictures": [{
                        "id": 22,
                        "listing_id": 31,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim (1).463.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T13:11:16.000000Z",
                        "updated_at": "2022-03-23T13:11:16.000000Z"
                    }]
                }
            ],
            "address": [{
                    "lat": 23.259933,
                    "lng": 77.412613
                },
                {
                    "lat": 56.130366,
                    "lng": -106.346771
                }
            ]
        }';

        $listing = json_decode(stripslashes($data),true);
       // dd($listing);

      
    return view('homepage',compact('listing') );  
    }

  

    public function getlisting(Request $request){
        // echo"<pre>"; 
        // dd($request);
        // echo"</pre>"; 
        // exit;
    $data = '{
        "data": [{
                "id": 30,
                "user_id": 3,
                "name": "Hudson",
                "description": "Temporibus voluptate officia repudiandae duis",
                "picture": null,
                "price_per_hour": 400,
                "per_hour_rate": null,
                "price_per_day": null,
                "per_day_rate": null,
                "review_stars": null,
                "listing_capacity_id": 1,
                "status": 1,
                "half_day_discount": null,
                "half_discount_rate": null,
                "full_day_discount": null,
                "full_discount_rate": null,
                "hst_check": null,
                "sale_tax": null,
                "full_day_start_time": null,
                "full_day_end_time": null,
                "min_hour": "3hour",
                "advance_notice": null,
                "hosting_instruction": null,
                "cleaning_fee": null,
                "cleaning_fee_percent": null,
                "step": 2,
                "sync_token": null,
                "is_first_listing": null,
                "currency": null,
                "listing_type": null,
                "address_id": 28,
                "created_at": "2022-03-30T12:47:11.000000Z",
                "updated_at": "2022-03-30T12:47:22.000000Z",
                "capacityNEW": {
                    "id": 1,
                    "icon": "",
                    "description": "5",
                    "min_people": 1,
                    "max_people": 5,
                    "created_at": null,
                    "updated_at": null
                },
                "address": {
                    "id": 28,
                    "listing_id": 30,
                    "formatted_address": "canada",
                    "postal_code": null,
                    "lat": "23.259933",
                    "lng": "77.412613",
                    "building_name": "Jhon",
                    "intersection_a": null,
                    "intersection_b": null,
                    "address": "Canada",
                    "city": "Ambala",
                    "province": "Haryana",
                    "created_at": "2022-03-30T12:47:11.000000Z",
                    "updated_at": "2022-03-30T12:47:11.000000Z"
                },
                "listing_gallery": [{
                    "id": 21,
                    "listing_id": 30,
                    "picture_name": "austin-distel.jpg",
                    "preview_img": 1,
                    "picture": "imgpsh_fullsize_anim.785.png",
                    "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "size": null,
                    "order": 0,
                    "created_at": "2022-03-23T11:22:35.000000Z",
                    "updated_at": "2022-03-23T11:22:35.000000Z"
                }],
                "listing_amenities": [{
                        "id": 2,
                        "name": "Air Conditioning",
                        "icon": "Air conditioning.png",
                        "description": "",
                        "icon_1": "air_conditioning",
                        "type": "building",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 2
                        }
                    },
                    {
                        "id": 3,
                        "name": "Breakout Space",
                        "icon": "Breakout.png",
                        "description": "",
                        "icon_1": "Breakout",
                        "type": "boardroom",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 3
                        }
                    },
                    {
                        "id": 5,
                        "name": "Reception",
                        "icon": "Reception.png",
                        "description": "",
                        "icon_1": "Reception",
                        "type": "building",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 5
                        }
                    },
                    {
                        "id": 8,
                        "name": "Washroom",
                        "icon": "Washroom-icon.png",
                        "description": "",
                        "icon_1": "washroom",
                        "type": "building",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 8
                        }
                    },
                    {
                        "id": 1,
                        "name": "Accessibility Friendly",
                        "icon": "Accessible.png",
                        "description": "",
                        "icon_1": "Accessible",
                        "type": "boardroom",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 1
                        }
                    },
                    {
                        "id": 6,
                        "name": "Teleconference",
                        "icon": "Teleconference.png",
                        "description": "",
                        "icon_1": "Teleconference",
                        "type": "technology",
                        "created_at": null,
                        "updated_at": null,
                        "pivot": {
                            "listing_id": 30,
                            "amenity_id": 6
                        }
                    }
                ],
                "listing_capacity": {
                    "id": 1,
                    "icon": "",
                    "description": "5",
                    "min_people": 1,
                    "max_people": 5,
                    "created_at": null,
                    "updated_at": null
                },
                "pictures": [{
                    "id": 21,
                    "listing_id": 30,
                    "picture_name": "austin-distel.jpg",
                    "preview_img": 1,
                    "picture": "imgpsh_fullsize_anim.785.png",
                    "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "size": null,
                    "order": 0,
                    "created_at": "2022-03-23T11:22:35.000000Z",
                    "updated_at": "2022-03-23T11:22:35.000000Z"
                }]
            },
            {
                "id": 31,
                "user_id": 3,
                "name": "Clara",
                "description": "Temporibus voluptate officia repudiandae duis",
                "picture": "austin-distel.jpg",
                "price_per_hour": 200,
                "per_hour_rate": null,
                "price_per_day": null,
                "per_day_rate": null,
                "review_stars": null,
                "listing_capacity_id": 1,
                "status": 1,
                "half_day_discount": null,
                "half_discount_rate": null,
                "full_day_discount": null,
                "full_discount_rate": null,
                "hst_check": null,
                "sale_tax": null,
                "full_day_start_time": null,
                "full_day_end_time": null,
                "min_hour": "1hour",
                "advance_notice": null,
                "hosting_instruction": null,
                "cleaning_fee": null,
                "cleaning_fee_percent": null,
                "step": 2,
                "sync_token": null,
                "is_first_listing": null,
                "currency": null,
                "listing_type": null,
                "address_id": 29,
                "created_at": "2022-03-30T12:47:11.000000Z",
                "updated_at": "2022-03-30T12:47:22.000000Z",
                "capacityNEW": {
                    "id": 1,
                    "icon": "",
                    "description": "5",
                    "min_people": 1,
                    "max_people": 5,
                    "created_at": null,
                    "updated_at": null
                },
                "address": {
                    "id": 29,
                    "listing_id": 31,
                    "formatted_address": "Canada",
                    "postal_code": null,
                    "lat": "56.130366",
                    "lng": "-106.346771",
                    "building_name": "Jhon",
                    "intersection_a": null,
                    "intersection_b": null,
                    "address": "Canada",
                    "city": "Ambala",
                    "province": "Haryana",
                    "created_at": "2022-03-30T12:47:11.000000Z",
                    "updated_at": "2022-03-30T12:47:11.000000Z"
                },
                "listing_gallery": [{
                    "id": 22,
                    "listing_id": 31,
                    "picture_name": "austin-distel.jpg",
                    "preview_img": 1,
                    "picture": "imgpsh_fullsize_anim (1).463.png",
                    "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "size": null,
                    "order": 0,
                    "created_at": "2022-03-23T13:11:16.000000Z",
                    "updated_at": "2022-03-23T13:11:16.000000Z"
                }],
                "listing_amenities": [],
                "listing_capacity": {
                    "id": 1,
                    "icon": "",
                    "description": "5",
                    "min_people": 1,
                    "max_people": 5,
                    "created_at": null,
                    "updated_at": null
                },
                "pictures": [{
                    "id": 22,
                    "listing_id": 31,
                    "picture_name": "austin-distel.jpg",
                    "preview_img": 1,
                    "picture": "imgpsh_fullsize_anim (1).463.png",
                    "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                    "size": null,
                    "order": 0,
                    "created_at": "2022-03-23T13:11:16.000000Z",
                    "updated_at": "2022-03-23T13:11:16.000000Z"
                }]
            }
        ],
        "address": [{
                "lat": 23.259933,
                "lng": 77.412613
            },
            {
                "lat": 56.130366,
                "lng": -106.346771
            }
        ]
    }';

       
        //$listing = json_decode(stripslashes($data),true); 
        $listings = json_decode(stripslashes($data),true); 
        Session::put('startdate', $request->input("startDate"));
        Session::get('startdate');
        Session::put('enddate', $request->input("endDate"));
        Session::put('time', $request->input("checkIn"));
      
        
        Session::put('timeout', $request->input("checkOut"));
       

    
    //    dd( Session::get('time'));
   // $minutes = round(abs($to_time - $from_time) / 60,2);

      
     //  dd($hourdiff);

        // $listing = Listing::where('status',1);
    
    



    
    // dd($listing[0]->calender);
        
            
      /*  $startDate = date('Y-m-d',strtotime($request->startDate));
        $endDate = date('Y-m-d',strtotime($request->endDate));
        // dd($request->startDate);

        if(isset($request->startDate) && $request->startDate != '' ){
            $listing->whereHas('calender', function (Builder $query) use($startDate){
                    $query->where('startDate', 'like', '%'.$startDate.'%');
                });
        
        }
    

        if(isset($request->endDate) && $request->endDate != '' ){
            $listing->whereHas('calender', function (Builder $query) use($endDate){
                    $query->where('endDate', 'like', '%'.$endDate.'%');
                });
                
        } 
    
        if(isset($request->price) && $request->price != '' ){
            $listing->where('price_per_hour', 'like', '%'.$request->price.'%');
        }

        if(isset($request->roomCapacity) && $request->roomCapacity != '' ){
            $listing->whereHas('listing_capacity', function (Builder $query) use($request){
                    $query->where('description', 'like', '%'.$request->roomCapacity.'%');
                });
        }

        
        if(isset($request->amenities) && $request->amenities != '' ){
                $listing->whereHas('listing_amenities', function (Builder $query) use($request){
                        $query->whereIn('amenity_id', 'like', '%'.$request->amenities.'%');
                    });
        }    

        if(isset($request->location) && $request->location != '' ){
            $listing->whereHas('address', function (Builder $query) use($request){
                    $query->where('formatted_address', 'like', '%'.$request->location.'%');
                });
        }*/


    //   $listings = $listing->get();
            
      
    // dd($listings['data']);
    $locations = array();
    foreach ($listings['address'] as $key => $value) {
    //    dd($value);
        $obj = new \stdClass ;
        $obj->lat = (float)$value['lat'];
        $obj->lng = (float)$value['lng'];
        // dd($obj);
        $locations[] = $obj;
       
    }
    $listing['location']= $locations;
    
        return view('ajaxlisting' ,compact('listings','locations'))->render();

    }

    public function get_listing_details(Request $request, $id)
    {
            
       
        $listing = ' {
            "data": [{
                    "id": 30,
                    "user_id": 3,
                    "name": "Hudson",
                    "description": "Temporibus voluptate officia repudiandae duis",
                    "picture": null,
                    "price_per_hour": 400,
                    "per_hour_rate": null,
                    "price_per_day": null,
                    "per_day_rate": null,
                    "review_stars": null,
                    "listing_capacity_id": 1,
                    "status": 1,
                    "half_day_discount": null,
                    "half_discount_rate": null,
                    "full_day_discount": 10,
                    "full_discount_rate": null,
                    "hst_check": null,
                    "sale_tax": null,
                    "full_day_start_time": null,
                    "full_day_end_time": null,
                    "min_hour": "3hour",
                    "advance_notice": null,
                    "hosting_instruction": null,
                    "cleaning_fee": null,
                    "cleaning_fee_percent": null,
                    "step": 2,
                    "sync_token": null,
                    "is_first_listing": null,
                    "currency": null,
                    "listing_type": null,
                    "address_id": 28,
                    "created_at": "2022-03-30T12:47:11.000000Z",
                    "updated_at": "2022-03-30T12:47:22.000000Z",
                    "capacityNEW": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "address": {
                        "id": 28,
                        "listing_id": 30,
                        "formatted_address": "chandigarh",
                        "postal_code": null,
                        "lat": "23.259933",
                        "lng": "77.412613",
                        "building_name": "Jhon",
                        "intersection_a": null,
                        "intersection_b": null,
                        "address": "Canada",
                        "city": "Ambala",
                        "province": "Haryana",
                        "created_at": "2022-03-30T12:47:11.000000Z",
                        "updated_at": "2022-03-30T12:47:11.000000Z"
                    },
                    "listing_gallery": [{
                        "id": 21,
                        "listing_id": 30,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim.785.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T11:22:35.000000Z",
                        "updated_at": "2022-03-23T11:22:35.000000Z"
                    }],
                    "listing_amenities": [{
                            "id": 2,
                            "name": "Air Conditioning",
                            "icon": "Air conditioning.png",
                            "description": "",
                            "icon_1": "air_conditioning",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 2
                            }
                        },
                        {
                            "id": 3,
                            "name": "Breakout Space",
                            "icon": "Breakout.png",
                            "description": "",
                            "icon_1": "Breakout",
                            "type": "boardroom",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 3
                            }
                        },
                        {
                            "id": 5,
                            "name": "Reception",
                            "icon": "Reception.png",
                            "description": "",
                            "icon_1": "Reception",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 5
                            }
                        },
                        {
                            "id": 8,
                            "name": "Washroom",
                            "icon": "Washroom-icon.png",
                            "description": "",
                            "icon_1": "washroom",
                            "type": "building",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 8
                            }
                        },
                        {
                            "id": 1,
                            "name": "Accessibility Friendly",
                            "icon": "Accessible.png",
                            "description": "",
                            "icon_1": "Accessible",
                            "type": "boardroom",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 1
                            }
                        },
                        {
                            "id": 6,
                            "name": "Teleconference",
                            "icon": "Teleconference.png",
                            "description": "",
                            "icon_1": "Teleconference",
                            "type": "technology",
                            "created_at": null,
                            "updated_at": null,
                            "pivot": {
                                "listing_id": 30,
                                "amenity_id": 6
                            }
                        }
                    ],
                    "hosting_rules": {
                        "id": 16,
                        "listing_id": 30,
                        "hosting_rule": "sdfjnhkjh",
                        "created_at": "2022-03-24T08:17:17.000000Z",
                        "updated_at": "2022-03-24T08:17:17.000000Z"
                        },
                    "listing_capacity": {
                        "id": 1,
                        "icon": "",
                        "description": "5",
                        "min_people": 1,
                        "max_people": 5,
                        "created_at": null,
                        "updated_at": null
                    },
                    "pictures": [{
                        "id": 21,
                        "listing_id": 30,
                        "picture_name": "austin-distel.jpg",
                        "preview_img": 1,
                        "picture": "imgpsh_fullsize_anim.785.png",
                        "picture_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "mobile_path": "C:\\xampp\\htdocs\\justboardrooms\\public/Images/",
                        "size": null,
                        "order": 0,
                        "created_at": "2022-03-23T11:22:35.000000Z",
                        "updated_at": "2022-03-23T11:22:35.000000Z"
                    }]
                }
            ],

            

            "address": [{
                    "lat": 23.259933,
                    "lng": 77.412613
                }
            ]
        }';
              
        // $listing = listing::find($id);
        // $other_boardrooms = listing::where('id','!=',$id)->get();
        // dd($other_boardrooms);


        $other_boardrooms = '{
            "data": [
            {
            "id": 4,
            "user_id": 1,
            "name": "Hadley Andrews",
            "description": "Nihil eos aut veniam elit nostrud quis minima laudantium animi",
            "picture": "download.525.jpg",
            "price_per_hour": 25,
            "per_hour_rate": "25",
            "price_per_day": 200,
            "per_day_rate": "200",
            "review_stars": null,
            "listing_capacity_id": 3,
            "status": 1,
            "half_day_discount": 0,
            "half_discount_rate": 0,
            "full_day_discount": 0,
            "full_discount_rate": 0,
            "hst_check": 0,
            "sale_tax": 0,
            "full_day_start_time": null,
            "full_day_end_time": null,
            "min_hour": "3",
            "advance_notice": "7",
            "hosting_instruction": "adad",
            "cleaning_fee": null,
            "cleaning_fee_percent": null,
            "step": 6,
            "sync_token": null,
            "is_first_listing": 1,
            "currency": "USD",
            "listing_type": 0,
            "address_id": 4,
            "created_at": "2022-04-12T05:21:47.000000Z",
            "updated_at": "2022-04-12T05:24:27.000000Z",
    
            "address": {
            "id": 4,
            "listing_id": 4,
            "formatted_address": "Cañada de Gómez, Santa Fe Province, Argentina",
            "postal_code": null,
            "lat": "-32.8211646",
            "lng": "-61.3953734",
            "building_name": "Test",
            "intersection_a": null,
            "intersection_b": null,
            "address": "Cañada de Gómez",
            "city": "Cañada de Gómez",
            "province": "Santa Fe Province",
            "created_at": "2022-04-12T05:21:47.000000Z",
            "updated_at": "2022-04-12T05:21:47.000000Z"
            },
    
            "listing_gallery": {
            "id": 41,
            "listing_id": 4,
            "picture_name": "austin-distel-1.jpg",
            "preview_img": 1,
            "picture": "download.525.jpg",
            "picture_path": "D:/xampp/htdocs/justboardroombooking/public/imgs/",
            "mobile_path": "D:/xampp/htdocs/justboardroombooking/public/imgs/",
            "size": null,
            "order": 0,
            "created_at": "2022-04-12T05:22:00.000000Z",
            "updated_at": "2022-04-12T05:22:00.000000Z"
            },
    
            "listing_capacity": {
            "id": 3,
            "icon": "",
            "description": "11-20",
            "min_people": 11,
            "max_people": 20,
            "created_at": null,
            "updated_at": null
            }
            },
    
    
            {
            "id": 5,
            "user_id": 1,
            "name": "Hiroko Wooten",
            "description": "Recusandae Exercitationem magnam omnis officia accusantium non cumque officiis adipisicing iure irure esse qui quia libero consectetur nihil facere a",
            "picture": "download.209.jpg",
            "price_per_hour": 90,
            "per_hour_rate": "90",
            "price_per_day": 720,
            "per_day_rate": "720",
            "review_stars": null,
            "listing_capacity_id": 2,
            "status": 1,
            "half_day_discount": 0,
            "half_discount_rate": 0,
            "full_day_discount": 0,
            "full_discount_rate": 0,
            "hst_check": 0,
            "sale_tax": 0,
            "full_day_start_time": null,
            "full_day_end_time": null,
            "min_hour": "3",
            "advance_notice": "0",
            "hosting_instruction": "adadss",
            "cleaning_fee": null,
            "cleaning_fee_percent": null,
            "step": 6,
            "sync_token": null,
            "is_first_listing": 1,
            "currency": "CAD",
            "listing_type": 0,
            "address_id": 5,
            "created_at": "2022-04-16T07:41:37.000000Z",
            "updated_at": "2022-04-16T07:42:38.000000Z",
    
            "address": {
            "id": 5,
            "listing_id": 5,
            "formatted_address": "Canam Plaza, Sector 11, Panchkula, Haryana, India",
            "postal_code": "134117",
            "lat": "30.6864243",
            "lng": "76.8491224",
            "building_name": "Ronan Velazquez",
            "intersection_a": null,
            "intersection_b": null,
            "address": "Canam Plaza",
            "city": "Panchkula",
            "province": "Haryana",
            "created_at": "2022-04-16T07:41:38.000000Z",
            "updated_at": "2022-04-16T07:41:38.000000Z"
            },
    
            "listing_gallery": {
            "id": 42,
            "listing_id": 5,
            "picture_name": "austin-distel-1.jpg",
            "preview_img": 1,
            "picture": "download.209.jpg",
            "picture_path": "D:/xampp/htdocs/justboardroombooking/public/imgs/",
            "mobile_path": "D:/xampp/htdocs/justboardroombooking/public/imgs/",
            "size": null,
            "order": 0,
            "created_at": "2022-04-16T07:42:03.000000Z",
            "updated_at": "2022-04-16T07:42:03.000000Z"
            },
    
            "listing_capacity": {
            "id": 2,
            "icon": "",
            "description": "10",
            "min_people": 5,
            "max_people": 10,
            "created_at": null,
            "updated_at": null
            }
            
        
            }
            ]
            }';

           
            $listing = json_decode(stripslashes($listing), true);
            $other_boardrooms = json_decode(stripslashes($other_boardrooms), true);

           
            $startDate =  Session::get('startdate')." ".Session::get('time');
            $endDate = Session::get('enddate')." ".Session::get('timeout');
             

         
            //  $time = Session::get('time');
            // $timeout =  Session::get('timeout');

            $hourdiff = round((strtotime($endDate) - strtotime($startDate))/3600, 1);
           // dd($listing['data'][0]['price_per_hour']);
          
            $price_per_hours = $listing['data'][0]['price_per_hour'];
            $calculate_rate =  $price_per_hours * $hourdiff;
            $discountPrice = ($calculate_rate * $listing['data'][0]['full_day_discount'])/100 ;
            $totalPrice =  $calculate_rate - $discountPrice ;
        
        
        
            //dd($totalPrice);
            
            // dd($listings);
        return view('listing_details' ,compact('listing', 'other_boardrooms', 'hourdiff' , 'calculate_rate', 'startDate','discountPrice','totalPrice'));  
    }

    public function payment(Request $request){

      $calculate_rate = $request->input('calculate_rate');

    //     $data = '{
    //         "data": [{
    //             "price_per_hour": 400
    //             ]}
    //         }';
    //     $listing = json_decode(stripslashes($data),true);
    //     $time = Session::get('time');
    //     $timeout =  Session::get('timeout');
    
    //     $hourdiff = round((strtotime($timeout) - strtotime($time))/3600, 1);
    //     $price_per_hours = $listing;

    //    // dd($price_per_hours);

    //     $calculate_rate =  $price_per_hours * $hourdiff;
        return view('payment' ,compact('calculate_rate'));  
    
        
    }


public function wishlist()
{
    $data = ' {
        "data": [{   
                "id": 1,
                "listing_id": 30,
                "user_id": 3,
                "created_at": null,
                "updated_at": null,
                "user": {
                "id": 3,
                "first_name": "Snehal",
                "last_name": "raj",
                "email": "admin@admin.com",
                "email_verified_at": null,
                "created_at": "2022-03-28T10:07:56.000000Z",
                "updated_at": "2022-03-28T10:07:56.000000Z"
                },
                "listing": {
                "id": 30,
                "user_id": 3,
                "name": "Hudson",
                "description": "Temporibus voluptate officia repudiandae duis",
                "picture": null,
                "price_per_hour": 400,
                "per_hour_rate": null,
                "price_per_day": null,
                "per_day_rate": null,
                "review_stars": null,
                "listing_capacity_id": 1,
                "status": 1,
                "half_day_discount": null,
                "half_discount_rate": null,
                "full_day_discount": null,
                "full_discount_rate": null,
                "hst_check": null,
                "sale_tax": null,
                "full_day_start_time": null,
                "full_day_end_time": null,
                "min_hour": "3hour",
                "advance_notice": null,
                "hosting_instruction": null,
                "cleaning_fee": null,
                "cleaning_fee_percent": null,
                "step": 2,
                "sync_token": null,
                "is_first_listing": null,
                "currency": null,
                "listing_type": null,
                "address_id": 28,
                "created_at": "2022-03-30T12:47:11.000000Z",
                "updated_at": "2022-03-30T12:47:22.000000Z"
                }
                ]
            }';
        
            $listing = json_decode(stripslashes($data),true);
            //dd($listing);
         
    return view('wishlist', compact('listing'));
 }

public function saved_boardroom(Request $request){
    
    return response()->json([
        'save' => "Wishlist added",
       
   
        ], 200);

//    return view('saved_boardroom' );  
  
      
}

public function msg(Request $request){

 //dd($request);

    return response()->json([
        'msg' => "msg added",
       
    
        
        ], 200);
   // return view('msg');
    
}
}

