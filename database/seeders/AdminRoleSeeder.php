<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@youbelong.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('Admin@2022'),
            'phone' => '962-780577727',
            'address' => 'Amman, Jordan',
            'role_id' => Role::where('name', 'admin')->pluck('id')->first(),
        ]);
    }
}
