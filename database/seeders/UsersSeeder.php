<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role_id'=>'1',
        ]);
        User::factory()->create([
            'name' => 'Nurse',
            'email' => 'nurse@gmail.com',
            'role_id'=>'2',
        ]);
        User::factory()->create([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'role_id'=>'2',
        ]);
        User::factory()->create([
            'name' => 'Patient',
            'email' => 'patient@gmail.com',
            'role_id'=>'2',
        ]);
    }
}
