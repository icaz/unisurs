<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=>'superadmin']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'moderator']);
        Role::create(['name'=>'blogger']);
        Role::create(['name'=>'user']);
    }
}
