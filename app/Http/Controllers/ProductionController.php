<?php

namespace App\Http\Controllers;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
       public function get_all_production(Request $request){
            $data=  Production::all();

             return response()->json([
                'status' =>  $data,
            ]);
       }
}
