<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class CreateRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [ // 1
                'name' => 'Admin', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ // 2
                'name' => 'Student', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
