<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('colaboradores')->insert([
            'id' => Str::random(255),
            'nome' => Str::random(255),
            'email' => Str::random(255).'@'.Str::random(255).'.com',
            'telefone' => rand(100000000, 999999999),
            'data_nascimento' => rand(100000000, 999999999),
            'id_empresa' => Str::random(255),
        ]);

    }
}
