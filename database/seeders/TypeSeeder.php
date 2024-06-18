<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        // DB::table('types')->truncate();

        $types = [
            ['Unknown','?'],
            ['Thief','The rogue or thief is one of the standard playable character classes in most editions of the Dungeons & Dragons fantasy role-playing game.[1] A rogue is a versatile character, capable of sneaky combat and nimble tricks. The rogue is stealthy and dexterous, and in early editions was the only official base class from the Player’s Handbook capable of finding and disarming traps and picking locks. The rogue also has the ability to “sneak attack” (“backstab” in previous editions) enemies who are caught off-guard or taken by surprise, inflicting extra damage.'],
        ['Barbarian','Barbarian is one of the base character classes presented in the Player’s Handbook. The barbarian is seen as the archetypal warrior who uses brute strength and raw fury to excel in combat, instead of the honed skills of the Fighter or measured strength of the Monk.[4]: 84–85  Of all the classes, only the barbarian begins the game illiterate and is forced to expend extra skill points or multiclass in order to read and write. Half-Orcs have Barbarian as a favored class.'],
        ['Ranger','The ranger was one of the standard character-classes available in the original Player’s Handbook,[4] one of five subclasses.[5]: 145  The first edition rangers were a subtype of the fighters,[6] using any weapon and wearing any armor, but they gained extra attacks at a slower rate than fighters and paladins. Unlike other warriors, the ranger used d8 hit dice instead of d10s, but had a second hit die at 1st level and maxed out at 11 hit dice instead of nine. Rangers also had extensive tracking abilities, based on a percentage score, and were able to surprise opponents on a roll of 1–3 on a d6 (rather than a 1–2) while they themselves could only be surprised on a 1. Rangers gained limited spell use at level 8, acquiring 1st–3rd level druid spells and 1st and 2nd level magic-user spells (two per level maximum). Rangers were most effective when fighting giants and humanoids (such as orcs), gaining a +1 to damage per level against these opponents.'],
        ['Wizard','In the original version of the game, magic-user was one of the base character classes.[1] Magic-User was one of the three original classes, the other two being Fighting Man (renamed Fighter in later editions) and Cleric.
        The Magic-User was physically weak and vulnerable but compensated for this with the potential to develop powerful spellcasting abilities. In practice a mid- to high-level Magic-User was a combination intelligence gatherer and walking artillery, gathering information about possible dangers not yet seen and augmenting the physical combat abilities of the other classes with potentially devastating long-range and area attacks.']
    ];

    $img_urls = ["/img/charact_unknown.jpg", "/img/charact_thief.jpg", "/img/charact_barbarian.png", "/img/charact_elf.png", "/img/charact_wizard.png"];
        foreach ($types as $key => $type) {
            $new_type = new Type();
            $new_type->name = $type[0];
            $new_type->description = $type[1];
            $new_type->url_img = $img_urls[$key];

            
            $new_type->save();
        };

    }
}
