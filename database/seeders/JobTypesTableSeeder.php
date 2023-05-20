<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_types')->delete();
        
        \DB::table('job_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Otra',
                'description' => NULL,
                'slug' => 'otra',
                'status' => 1,
                'created_at' => '2023-05-20 13:24:23',
                'updated_at' => '2023-05-20 13:24:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Medicina',
                'description' => NULL,
                'slug' => 'medicina',
                'status' => 1,
                'created_at' => '2023-05-20 13:24:30',
                'updated_at' => '2023-05-20 13:24:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Administración pública',
                'description' => NULL,
                'slug' => 'administracion-publica',
                'status' => 1,
                'created_at' => '2023-05-20 13:24:46',
                'updated_at' => '2023-05-20 13:24:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Transporte',
                'description' => NULL,
                'slug' => 'transporte',
                'status' => 1,
                'created_at' => '2023-05-20 13:24:52',
                'updated_at' => '2023-05-20 13:24:52',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Construcción',
                'description' => NULL,
                'slug' => 'construccion',
                'status' => 1,
                'created_at' => '2023-05-20 13:25:00',
                'updated_at' => '2023-05-20 13:25:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Tecnología',
                'description' => NULL,
                'slug' => 'tecnologia',
                'status' => 1,
                'created_at' => '2023-05-20 13:24:23',
                'updated_at' => '2023-05-20 13:24:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}