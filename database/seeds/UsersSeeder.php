<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        User::truncate(); //vide le tableau

        DB::table('users')->insert([
            'name' => "Andre",
            "email" => "andre@exo.com",
            "role" => "admin",
            "password" => bcrypt("12345678"),
        ]);

        DB::table('users')->insert([
            'name' => "Joao",
            "email" => "joao@exo.com",
            "role" => "admin",
            "password" => bcrypt("12345678"),
        ]);

        DB::table('users')->insert([
            'name' => "Tiago",
            "email" => "tiago@exo.com",
            "role" => "admin",
            "password" => bcrypt("12345678"),
        ]);
    }
}
