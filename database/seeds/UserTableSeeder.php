<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = Role::where('name', 'Super Admin')->first();
        $role_user = Role::where('name', 'User')->first();

        $admin = new User();
        $admin->name = 'Shine';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('1Ade$Er32');
        $admin->save();
        $admin->roles()->attach($role_super_admin);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@admin.com';
        $user->password = bcrypt('ReM1@Et$');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
