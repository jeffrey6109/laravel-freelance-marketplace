<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freelancer = new Role;
        $freelancer->name = 'Freelancer';
        $freelancer->description = 'Freelancer looking for projects';
        $freelancer->save();

        $employer = new Role;
        $employer->name = 'Employer';
        $employer->description = 'Employer looking for freelancers';
        $employer->save();

        // $admin = new Role;
        // $admin->name = 'Admin';
        // $admin->description = 'Admin of the website';
        // $admin->save();

        // $superadmin = new Role;
        // $superadmin->name = 'Super Admin';
        // $superadmin->description = 'Super Admin of the website';
        // $superadmin->save();

        // $client = new Role;
        // $client->name = 'Client';
        // $client->description = 'Client of the website';
        // $client->save();
    }
}
