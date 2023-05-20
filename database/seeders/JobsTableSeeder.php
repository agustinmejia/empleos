<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'job_type_id' => 6,
                'name' => 'Ingeniero de sistemas',
                'slug' => 'ingeniero-de-sistemas',
                'description' => NULL,
                'status' => 1,
                'created_at' => '2023-05-20 13:29:14',
                'updated_at' => '2023-05-20 13:29:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}