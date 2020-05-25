<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $userAdmin = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Mr',
             'firstname' => 'admin',
             'role' => 2
         ]);
         $userStaff = factory(App\User::class)->create([
             'username' => 'staff',
             'email' => 'staff@gmail.com',
             'password' => bcrypt('staff'),
             'lastname' => 'Mr Staff',
             'firstname' => 'staff',
             'role' => 1
         ]);

        Role::create([
            'id' => 1,
            'title' => 'staff'
        ]);
        Role::create([
            'id' => 2,
            'title' => 'admin'
        ]);
    }
}
