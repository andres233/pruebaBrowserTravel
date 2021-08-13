<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
    		[
    			'name' => "Humedad",
    			'description' => "Humedad relativa",
                'enabled' => 1,
    		],
    		[
    			'name' => "Temperatura",
    			'description' => "Humedad relativa",
                'enabled' => 1,
    		],
    		[
    			'name' => "Precipitaciones",
    			'description' => "probabilidad de precipitaciones",
                'enabled' => 1,
            ],
            [
    			'name' => "Viento",
    			'description' => "velocidad del viento en km/h",
                'enabled' => 1,
    		]
    	];

        foreach ($types as $type) {
    		Types::create($type);
    	}
    }
}
