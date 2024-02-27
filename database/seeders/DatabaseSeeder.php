<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('organizacoes')->insert([
            'vc_nome' => 'OMS',
            'descricao' => 'Algo muito importante',
            'unid_comando' => 'António Guterres',
            'imagem' => 'alguma string'
        ]);

        DB::table('users')->insert([
            'vc_pr_nome' => 'Isabel',
            'vc_nome_meio' => 'Sapuile',
            'vc_ult_nome' => 'Solendo',
            'BI' => '12WERGFBVCTVW',
            'telefone' => '983456787',
            'email' => 'volunteerhub@gmail.com',
            'provincia' => 'Luanda',
            'municipio' => 'Cazenga',
            'genero' => 'F',
            'password'=> Hash::make("12345678"),
            'it_id_org' => '1'
        ]);
    }
}
