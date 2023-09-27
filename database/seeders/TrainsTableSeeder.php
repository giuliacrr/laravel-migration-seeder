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
        for ($i = 0; $i < 10; $i++) {
            $Train = new Train();

            $Train->azienda = $faker->company();
            $Train->stazione_partenza = $faker->city();
            $Train->stazione_arrivo = $faker->city();
            $Train->orario_partenza = $faker->time();
            $Train->orario_arrivo = $faker->time();
            $Train->codice_treno = $faker->postcode();
            $Train->numero_carrozze = $faker->biasedNumberBetween(0, 10);
            $Train->in_orario = $faker->boolean();
            $Train->cancellato = $faker->boolean();

            $Train->save();
        }
    }
}
