<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
             $user = new User();
             $user->role_id   = '1';
             $user->name      = 'Admin';
             $user->username  = 'Aman';
             $user->email     = 'admin@gmail.com';
             $user->password  = bcrypt('12345678');
             $user->save();
  
             $user = new User();
             $user->role_id   = '2';
             $user->name      = 'Author';
             $user->username  = 'Preet';
             $user->email     = 'author@gmail.com';
             $user->password  = bcrypt('12345678');
             $user->save();

    }
}
