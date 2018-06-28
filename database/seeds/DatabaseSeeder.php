<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'email' => 'ceci.jimg@gmail.com',
            'name' => 'Ceci',
            'password' => bcrypt('123456'),
            'role' => 'U'
        ]);

        User::create([
            'email' => 'practicas106@hotmail.com',
            'name' => 'Emmanuel',
            'password' => bcrypt('123456'),
            'role' => 'U'
        ]);
        
        User::create([
            'email' => 'mntr_rdrgz@hotmail.com',
            'name' => 'Fabián Montero',
            'password' => bcrypt('123456'),
            'role' => 'A'
        ]);
    }
}
