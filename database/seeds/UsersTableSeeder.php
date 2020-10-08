<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $role = Role::select('id')->where('name', 'admin')->get()->first();
        $admin = User::create([
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('password'),
            ]);
        $admin->roles()->attach($role);
    }
}
