<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,1000) as $index){
            DB::table('candidats')->insert([
            'nom_candidat'=>$faker->word(10),
            'prenoms'=> $faker->word(10),
        ]);
        }
    }
}
