<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            for ($j=0; $j < 5; $j++) { 
                DB::table('desk_lists')->insert([
                    'name' => 'list ' . $j,
                    'desk_id' => $i
                ]);
            }
        }
        
    }
}
