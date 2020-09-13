<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { DB::table('users')->insert([
            'name' => 'intellisoft',
            'email' => 'intellisoft@admin.com',
            'password' =>bcrypt('intellisoft'),
            'role' =>'superadmin',
        ]);

         DB::table('users')->insert([
            'name' => 'hibikus',
            'email' => 'hibikus@admin.com',
            'password' =>bcrypt('hibikus'),
            'role' =>'admin',
        ]);
    }
}
