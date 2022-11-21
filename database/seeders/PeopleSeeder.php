<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'nome' => 'lucas',
            'sobrenome' => 'vitiello',
            'cpf' => '123546789',
            'celular' => '21968834048',
            'logradouro' => 'Rua Sargento João Lopes',
            'cep' => '21921600'
        ]);
    }
}
