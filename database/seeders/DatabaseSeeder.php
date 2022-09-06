<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ingredients;

use App\Models\Production;
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

			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'ATIS-ATIS(B)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'ATIS-ATIS(S)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BANANA CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BELGIUM';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BINANGKAL';
			$production->save();
			$production = new Production;
			$production->price ='';
			$production->bread_name = 'BIRTHDAY CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BOHOL';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BUKO PIE';
			$production->save();
			$production = new Production;
			$production->price ='4';
			$production->bread_name = 'BUNS';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHEESE BREAD';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHEESE DSAL';
			$production->save();
			$production = new Production;
			$production->price ='';
			$production->bread_name = 'CHIFFON CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCO CUP CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCO FLOWER';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCO GERMAN';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCO ROLL';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCO SQUASH';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CHOCOLATE CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CINNAMON';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'COCO BREAD/PANSO';
			$production->save();
			$production = new Production;
			$production->price ='10';
			$production->bread_name = 'CORNSTARCH CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CRINKLES - CHOCO';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CRINKLES - UBE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'CUP CAKE';
			$production->save();
			$production = new Production;
			$production->price ='25';
			$production->bread_name = 'DELETCHE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'DOUGHNUT';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'EGG BREAD';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'ELORDE';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'ENSAIMADA PLAIN (b)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'ENSAIMADA PLAIN()';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'ENSAIMADA with chz(b)';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'ENSAIMONGGO (b)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'ENSAIMONGGO (5)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'FRANCIS(b)';
			$production->save();
			$production = new Production;
			$production->price ='2';
			$production->bread_name = 'FRANCIS(s)';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'GERMAN LOAF';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'HALF MOON';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'HOPIA';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'TALIAN BREAD';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MAIS-MAIS';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MARBLE CAKE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MAYONNAISE';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'MONGO BREAD(B)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MONGO BREAD';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'MUNAY BREAD(b)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MUNAY BREAD(s)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'MUSHROOM';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'HAND BREAD';
			$production->save();
			$production = new Production;
			$production->price ='4';
			$production->bread_name = 'PANDESAL (b)';
			$production->save();
			$production = new Production;
			$production->price ='2';
			$production->bread_name = 'PANDESAL (m)';
			$production->save();
			$production = new Production;
			$production->price ='1';
			$production->bread_name = 'PANDESAL (s)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PAPAYA (b)';
			$production->save();
			$production = new Production;
			$production->price ='2';
			$production->bread_name = 'PAPAYA (s)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PINAYPAY/FINGER BREAD';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PINEAPPLE PIE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PINEAPPLE ROLL';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'RED PIE';
			$production->save();
			$production = new Production;
			$production->price ='40';
			$production->bread_name = 'SLICE/LOAF BREAD PLAIN';
			$production->save();
			$production = new Production;
			$production->price ='45';
			$production->bread_name = 'SLICE/LOAF BREAD with chz';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'SPANISH ROLL';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'STAR BREAD (b)';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'SWEETHEART';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'TIRE BREAD(b)';
			$production->save();
			$production = new Production;
			$production->price ='7';
			$production->bread_name = 'TORTA';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE CHEESE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE ENGLISH';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE FLOWER';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE GERMAN';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE PIE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE ROLL';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'UBE SQUASH';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'WHEAT BREAD';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'YOVO-PANDAN';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'YOYO-UBE';
			$production->save();
			$production = new Production;
			$production->price ='30';
			$production->bread_name = 'GRACIOSA';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BROWNIES';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'BUTTER SCOTCH';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PUTO CHEESE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PUTO UBE';
			$production->save();
			$production = new Production;
			$production->price ='5';
			$production->bread_name = 'PUTO PANDAN';
			$production->save();
			$production = new Production;
			$production->price ='70';
			$production->bread_name = 'PEANUT BUTTER';
			$production->save();



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
