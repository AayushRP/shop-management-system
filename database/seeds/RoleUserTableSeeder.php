<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        $admin_roles = Role::all();

        User::findOrFail(1)->roles()->sync($admin_roles->pluck('id'));

        $user_roles = $admin_roles->filter(function ($role) {
            return substr($role->title, 0) != 'Admin';
        });

        User::findOrFail(2)->roles()->sync($user_roles);

    }
}
