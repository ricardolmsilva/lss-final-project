<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class tutoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('tutoriais')->insert([
            'titulo' => $faker->words(3),
            'descricao' => $faker->text(100),
            'receita' => "1. Adicione gelo de água mineral e gele o copo<br>2. Aromatize com um zest de limão<br>3. Adicione 5cl de Gin Bulldog<br>4. Adicione 20cl de tónica Schweppes Hibisco",
            'imagemDeCapa' => "http://lorempixel.com/800/400/nightlife/"
        ]);
    }
}
