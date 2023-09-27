<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->unique()->numberBetween(11111111, 99999999);;
            $train->numero_carrozze = $faker->biasedNumberBetween(0, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_partenza = $faker->dateTimeInInterval("-3 days", " +5 days");

            $train->save();
        }
    }
}
