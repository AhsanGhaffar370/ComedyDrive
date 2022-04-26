<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\StudentDetail;
use Carbon\Carbon;

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Make Admin
        $user = User::create([ // 1
            'name' => 'admin', 
            'email' => 'admin@admin.com',
            'password' => md5('admin123'),
            'role_id' => 1,
            'status' => 1
        ]);

        StudentDetail::insert([
            [
                'user_id' => 1,
                'firstname' => 'admin',
                'lastname' => 'admin',
                'phone_no' => '10000531123',
                'dob' => Carbon::now(),
                'gender' => 'Male',
                'address' => 'lorem ipsum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
