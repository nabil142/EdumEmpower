<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat beberapa role

        $ownerRole = Role::create([
        'name' => 'owner'   
        ]);

        $studentRole = Role::create([
        'name' => 'student'
        ]);

        $adminRole = Role::create([
            'name' => 'admin'
            ]);

            //superadmin 
        $userOwner = User::create([
        'name' => 'Nabil F',
        'email' => 'nabilbatam@gmail.com',
        'password' => bcrypt('nabil123')
        ]);
        

        $userOwner->assignRole($ownerRole);
        
    
    }
}
