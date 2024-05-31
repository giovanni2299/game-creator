<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('characters')->truncate();

        for ($i = 0; $i <10; $i++) {
            $new_character = New Character();

            $new_character->name = $faker->name();
            $new_character->description = $faker->text();
            $new_character->attack = $faker->randomNumber(5, true);
            $new_character->defence = $faker->randomNumber(5, true);
            $new_character->speed = $faker->randomNumber(5, true);
            $new_character->life = $faker->randomNumber(3, true);
            $new_character->save();

        }
        
    }
}
