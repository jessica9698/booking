<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
        // $data = Http::get('https://reqres.in/api/users')->json();
      
    $data = '{
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

        
   // dd($data);  
    $listing = json_decode($data, true);
   // dd($listing);
    // $listing = (object)$listing['data'];
    // $listing =  $listing['data'][0];
    
    // $capacity =  [];
    // dd($listing);
    //    echo"<pre>";
    //    print_r($listing);
    //     exit;
    return view('homepage',compact('listing') );  
    }

   /* public function apitest()
    {
       // $listing = DB::table('listings')->get();
      $capacity =  ListingCapacity::all();//query return data    
       $listing = Listing::all();
       // dd($listing->calender);
        return view('homepage',compact('capacity','listing') );  
    }*/

    public function getlisting(Request $request){
        // echo"<pre>"; 
        // dd($request);
        // echo"</pre>"; 
        // exit;
    $data = '{
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

        
    $listings = json_decode($data, true);




        // $listing = Listing::where('status',1);
    
    



    
    // dd($listing[0]->calender);
        
            
        $startDate = date('Y-m-d',strtotime($request->startDate));
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
        }


    //   $listings = $listing->get();
            
        // dd($listing);
    // dd($listings['data']);
        $locations = array();
        foreach ($listings['data'] as $key => $value) {
            // $obj = new \stdClass ;
            // $obj->lat = (float)$value->address->lat;
            // $obj->lng = (float)$value->address->lng;
            // $obj = new \stdClass ;
            // dd( $value['address']['lng']);
            $locations['lat'] = (float)$value['address']['lat'];
            $locations['lng'] = (float)$value['address']['lng'];

            //
            // $locations[] = $obj ;
        }

      
        return view('ajaxlisting' ,compact('listings','locations'))->render();

    }

    public function get_listing_details(Request $request, $id)
    {
            
       
        $listings = '{
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
                    },

                                    
                    "listing_amenities": {
                    "id": 89,
                    "listing_id": 30,
                    "amenity_id": 6,
                    "created_at": null,
                    "updated_at": null
                    },
                    "hostingRule": {
                    "id": 16,
                    "listing_id": 30,
                    "hosting_rule": "sdfjnhkjh",
                    "created_at": "2022-03-24T08:17:17.000000Z",
                    "updated_at": "2022-03-24T08:17:17.000000Z"
                    }
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

            $listing = json_decode($listings, true);
            $other_boardrooms = json_decode($other_boardrooms, true);
       
        return view('listing_details' ,compact('listing','other_boardrooms'));  
    }






/*public function wishlist()
{
    $wishlists = Wishlist::where("user_id", "=", $user->id)->get();
    return view('wishlist', compact('wishlists'));
}

public function addToWishlist(Request $request)
    {
      //Validating title and body field
      $this->validate($request, array(
          'user_id'=>'required',
          'listing_id' =>'required',
        ));

      $wishlist = new Wishlist;
      $wishlist->user_id = $request->user_id;
      $wishlist->listing_id = $request->listing_id;


      $wishlist->save();

      return redirect()->back()->with('flash_message',
          'Item, '. $wishlist->listing->title.' Added to your wishlist.');
    }*/
}

