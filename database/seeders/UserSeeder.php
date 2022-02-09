<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userSuperAdmin = User::factory()->create([
            'name' => 'Super Administrador',
            'email' => 'super.admin@test.com',
            'is_super_admin' => true,
            'is_active' => true,
        ]);

        $user1 = User::factory()->create([
            'name' => 'Active user',
            'email' => 'user1@test.com',
            'is_active' => true,
        ]);

        $user2 = User::factory()->create([
            'name' => 'Inactive user',
            'email' => 'user2@test.com',
        ]);
    }
}
