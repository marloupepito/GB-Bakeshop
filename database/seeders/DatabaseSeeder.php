<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        

        
    }
}
