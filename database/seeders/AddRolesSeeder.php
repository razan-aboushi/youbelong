<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class AddRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'individual',
            'company',
            'carehome',
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate([
                'name' => $role,
            ]);
        }
    }
}
