<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrateur;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //je supprome les admin
        Administrateur::query()->delete();
        Administrateur::create([
            'nom'=>"Admin",
            'prenom'=>"Admin",
            "login"=>"admin",
            "password"=>bcrypt("password")
        ]);
        Role::query()->delete();
        $roles = config('site.roles');
        foreach ($roles as $role){
            Role::create([
                'libelle'=>$role
            ]);
        }
    }
}
