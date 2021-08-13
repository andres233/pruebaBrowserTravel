<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Places;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $places = [
    		[
    			'name' => "Miami",
    			'description' => "Miami, descrita como la unica ciudad del mundo que comenzo como una fantasia. Cuenta con un clima subtropical, un puerto natural protegido y unas playas espectaculares",
    			'image' => "https://www.turismoeeuu.com/wp-content/uploads/2011/04/Ciudad-de-Miami-760x500.jpg",
    			'latitud' => 25.77427,
                'longitud' => -80.19366,
                'enabled' => 1,
    		],
    		[
    			'name' => "Orlando",
    			'description' => "Es la sexta ciudad mas grande de Florida y la ciudad no costera mas grande,La ciudad es principalmente conocida por sus hoteles y sus muchas atracciones turisticas de interes infantil y juvenil, particularmente Walt Disney World Resort y Universal Orlando Resort",
    			'image' => "https://mundo-turismo.com/wp-content/uploads/2020/02/Orlando.jpg",
    			'latitud' => 28.53834,
                'longitud' => -81.37924,
                'enabled' => 1,
    		],
    		[
    			'name' => "New York",
    			'description' => "Nueva York es la ciudad mas poblada del Estado de Nueva York, en los Estados Unidos de America, y la segunda aglomeracion urbana del continente.",
    			'image' => "https://i.ytimg.com/vi/J9dV_ynF2g4/maxresdefault.jpg",
    			'latitud' => 40.71427,
                'longitud' => -74.00597,
                'enabled' => 1,
    		]
    	];


        foreach ($places as $place) {
    		Places::create($place);
    	}
    }
}
