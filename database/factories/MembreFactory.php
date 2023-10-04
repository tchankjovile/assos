<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class MembreFactory extends Factory
{
    public function definition()
    {
        return [
            'role_id' => $this->faker->randomNumber(),
            'no_cni' => $this->faker->word(),
            'nom' => $this->faker->word(),
            'prenom' => $this->faker->word(),
            'login' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'sexe' => $this->faker->word(),
            'password' => bcrypt($this->faker->password()),
            'date_naissance' => Carbon::now(),
            'ville_residence' => $this->faker->word(),
            'pays_residence' => $this->faker->word(),
            'telephone' => $this->faker->randomNumber(),
            'profession' => $this->faker->word(),
            'date_adhesion' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'email_verified_at' => Carbon::now(),
        ];
    }
}
