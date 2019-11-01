<?php

use Illuminate\Database\Seeder;
use App\Category;

class categoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'designacao' => 'Cítrico'
        ]);
    }
}
