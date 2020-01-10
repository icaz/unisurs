<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;


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
        DB::table('role_user')->truncate();
        

        $superAdminRole = Role::where('name','superadmin')->first();
        $adminRole = Role::where('name','admin')->first();
        $moderatorRole = Role::where('name','moderator')->first();
        $bloggerRole = Role::where('name','blogger')->first();
        $userRole = Role::where('name','user')->first();
        

        $admin = User::create([
            'name'=>'icaz Master',
            'email'=>'icaz@u.nisu.rs',
            'password'=> Hash::make('testing0')

        ]);
        $author = User::create([
            'name'=>'Mita Admin',
            'email'=>'mita@u.nisu.rs',
            'password'=> Hash::make('emotivac')

        ]);
        $user = User::create([
            'name'=>'User User',
            'email'=>'user@user.com',
            'password'=> Hash::make('password')

        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
