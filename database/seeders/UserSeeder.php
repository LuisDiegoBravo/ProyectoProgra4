<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' =>'Admin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('admin'),
        ])->assignRole('Admin');
        
        User::factory(99)->create();
    }
}
