<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IngredientsRequest;
class IngredientsRequestController extends Controller
{
    public function send_request_form(Request $request){

        $request->validate([
            'data'=>['required'],
            'id'=>['required'],
        ]);

        $request_id =rand(1000000000,9999999999);
       

        for ($i=0; $i < count($request->data); $i++) { 
             $ingredients = new IngredientsRequest;
             $ingredients->branch_id = $request->id;
             $ingredients->request_id = $request_id;
             $ingredients->ingredients_name = $request->data[$i][0];
             $ingredients->ingredients_quantity = $request->data[$i][1];
             $ingredients->ingredients_package = $request->data[$i][2];
             $ingredients->ingredients_status = $request->data[$i][3];
             $ingredients->save();
        }
         return response()->json([
                'status' => 'success'
            ]);
    }
     public function get_request_from_branch(Request $request){

             $request->validate([
                'id'=>['required'],
             ]);

              $request = IngredientsRequest::where('branch_id' ,$request->id)
              ->select('request_id','ingredients_status','created_at')->distinct('request_id')->orderBy('created_at','DESC')->get();

               return response()->json([
                'status' => $request
            ]);

     }
      public function get_only_current_branch_request(Request $request){

             $request->validate([
                'id'=>['required'],
                'search'=>['required'],
             ]);

              $request = IngredientsRequest::where([['branch_id','=',$request->id],['request_id','=',$request->search]])->get();

               return response()->json([
                'status' => $request
            ]);

     }
}
