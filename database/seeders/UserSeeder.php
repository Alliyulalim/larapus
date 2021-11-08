<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();

        // membuat role member
        $memberRole = new Role();
        $memberRole->name = "aember";
        $memberRole->display_name = "Member Larapus";
        $memberRole->save();

        // membuat user admin
        $userAdmin = new User;
        $userAdmin->name = "Admin Larapus";
        $userAdmin->email = "adminlarapus@gmail.com";
        $userAdmin->password = bcrypt("rahasia");
        $userAdmin->save();
        $userAdmin->attachRole($adminRole); 

        $userMember = new User;
        $userMember->name = "member Larapus";
        $userMember->email = "member@gmail.com";
        $userMember->password = bcrypt("rahasia");
        $userMember->save();
        $userMember->attachRole($memberRole); 
    }
}
