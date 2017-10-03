<?php

use Illuminate\Database\Seeder;
use App\Models\TypeUser;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$typeUsers = array(
    		[
    			'name_type_user' => 'Normal',
    		],
    		[
    			'name_type_user' => 'Premium',
    		],
    		[
    			'name_type_user' => 'Administrador',
    		],
    	);

    	foreach ($typeUsers as $value){
    		$typeUser = new TypeUser;
    		$typeUser->name_type_user = $value['name_type_user'];
    		$typeUser->save(); 
    	}
    }
}
