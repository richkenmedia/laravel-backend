<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = new Role();
        $role_super_admin->name = 'Super Admin';
        $role_super_admin->description = 'The super admin account for the application';
        $role_super_admin->save();

        $role_user = new Role();
        $role_user->name = 'Candidate';
        $role_user->description = 'Normal candidate account for the application with minimum permissions';
        $role_user->save();
    }
}
