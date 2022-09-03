<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ingredients;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     	   
     	    $user = new User;
	        $user->branch_name = 'admin';
	        $user->branch_assigned_person = 'admin';
	        $user->branch_position = 'admin';
	        $user->username = 'admin';
	        $user->password = Hash::make('admin');
	 		$user->status = 'active';
	 		$user->year = date('Y');
	        $user->save();

        for ($i=0; $i < 5; $i++) { 
        	$user = new User;
	        $user->branch_name = 'Branch '.$i;
	        $user->branch_assigned_person = 'person '.$i;
	        $user->branch_position = 'personnel';
	        $user->username = 'personnel'.$i;
	        $user->password = Hash::make('admin');
	 		$user->status = 'active';
	 		$user->year = date('Y');
	        $user->save();
        }

			$ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Gold Star';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Sun Moon Star';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'All Purpose';
	        $ingredients->save();
        
			$ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Brown Sugar';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Refined Sugar';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Refined Salt';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Mongoes';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Cocoa';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Cornstarch';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Alaska Evap';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Bambie Oil';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Alpha Oil';
	        $ingredients->save();

			$ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Baking Cap 30z';
	        $ingredients->save();    

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Cheese Magnolia';
	        $ingredients->save();     

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Maurepan Yeast';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Neco Egg Yellow';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Neco Choco Brown';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Neco Ube Violet';
	        $ingredients->save();  

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Old News';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Peotraco';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Peneapple Crushed';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Springkles';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Ube Powder';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Vanilla';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'BOS Bambie Pail';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Lecinta';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Dobrem';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Lunga White';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Glassine';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Cake Flour';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Frosty Wip Cream';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Baker Gel';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Puyo #2';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Puyo #4';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Puyo #6';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Puyo #8';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Puyo #16';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Lard';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Margarine';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Dairy Bake';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Maurepan Yeast B.O';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Triple a Baking Powder';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Baking Calumet';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Ultra Soft';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Plantza';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Drinking Straw';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = '1st General Poly';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Dairy Milk Butter Milk';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Doreen Condense Small';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Spring Lard';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Spring Margarine';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = '4x12 Texas';
	        $ingredients->save();  

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = '8x12 Roll Bag';
	        $ingredients->save();

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Bumbee Tiny Plain';
	        $ingredients->save();  

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Bumbee Medium Plain';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Bumbee Large Plain';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = '3rd Island Poly';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'HPCO RAW';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'VMC Refined';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'M.C Refined';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Green Monggo';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Eco Bag Medium';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Eco Bag Large';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'BOB';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'BC Baking Powder Green';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'BC Baking Poweder Red';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Ola Oil';
	        $ingredients->save(); 

	        $ingredients = new Ingredients;
	        $ingredients->ingredients_name = 'Anti Amag';
	        $ingredients->save(); 
    }
}
