<?php

namespace Database\Seeders;

use App\Models\Dataplaces;
use Illuminate\Database\Seeder;

class DataplacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($place = 1; $place < 4; $place++) {
            for ($type = 1; $type < 5; $type++) {
                for ($y = 0; $y < 7; $y++) {
                    switch ($type) {
                        case 1:
                            $value = rand(50, 91);;
                            break;
                        case 2:
                            $value = rand(17, 32);;
                            break;
                        case 3:
                            $value = rand(50, 60);;
                            break;
                        case 3:
                            $value = rand(5, 15);;
                            break;
                    }
                    $data = [
                        'place_id' => $place,
                        'type_id' => $type,
                        'value' => $value,
                    ];
                    Dataplaces::create($data);
                }
            }
        }

        // foreach ($data_array as $data) {
        // 	Dataplaces::create($data);
        // }
    }
}
