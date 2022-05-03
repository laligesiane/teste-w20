<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empresas')->insert([
            'id' => Str::random(255),
            'razao_social' => Str::random(255),
            'cnpj' => rand(100000000, 999999999),
            'telefone' => rand(100000000, 999999999),
            'email' => Str::random(255).'@'.Str::random(255).'.com',
            'endereco' => Str::random(255),
        ]);
    }
}
