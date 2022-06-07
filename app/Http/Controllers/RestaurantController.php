<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function addRestaurant(Request $request){

        $restaurant = new Restaurant;
        $restaurant->restaurant_name = $request->restaurant_name;
        // $restaurant->phone= $request->phone;
        // $restaurant->picture= $request->picture;
        // $restaurant->city= $request->city;
        $restaurant->save();

        return response()->json([
            "status" => "success",
        ], 200);
    }
}

