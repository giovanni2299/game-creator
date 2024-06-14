<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [['thief','descrinvo'],['barabarian','ewfewfew'],['ranger','ewfewfewfvwer'],['wizard','efwewfwe']];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type[0];
            $new_type->description = $type[1];
            $new_type->save();
        };

    }
}
