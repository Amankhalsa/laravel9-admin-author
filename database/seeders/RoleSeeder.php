<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role = new Role();
        $role->name = 'Admin';
        $role->slug = 'admin';    
        $role->save(); 
        
        $role = new Role();
        $role->name = 'Author';
        $role->slug = 'author';    
        $role->save();   
    }
}
