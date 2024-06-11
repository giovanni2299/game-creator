<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterWeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $weapons = Weapon::all();
        $characters = Character::all()->pluck('id');

        foreach($weapons as $weapon){
            $rand_characters_ids = $faker->randomElements($characters);

            foreach ($rand_characters_ids as $character_id){

                $weapon->characters()->attach($character_id);
            }
        }

    }
}
