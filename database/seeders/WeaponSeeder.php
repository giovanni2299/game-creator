<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Weapon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Exists;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(){
        // DB::table('weapons')->truncate();
        $data = $this->getCSVData( __DIR__ . '/items.csv');

        foreach($data as $index => $row){
            if($index > 0){
                $new_weapon = new Weapon();
                $name = $row[0];
                $new_weapon->name = $name;
                $new_weapon->slug = Str::slug($name);
                $new_weapon->category = $row[3];
                $new_weapon->weight = $row[4];
                $new_weapon->cost = $row[5];
                $new_weapon->damage_dice = $row[6];
                $new_weapon->save();

            }
        }
    }

    public function getCSVData(string $itemPath)
    {
        $data = [];

        $file_stream = fopen($itemPath, 'r') ;

        if($file_stream === false){
            exit('cannot open the file'. $itemPath);
        }
          //interrompe il ciclo solo se la funzione cvs restituisce false (la funzione csv restituisce fals solo quando non ci sono più righe da leggere)
        while(($row = fgetcsv($file_stream)) !== false ){
            $data[] = $row;
        }

        fclose($file_stream);

        return $data;
    }
}
