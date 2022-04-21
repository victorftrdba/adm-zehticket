<?php

namespace Database\Seeders;

use App\Models\Promoter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promoter::create([
            'name' => 'Pedro Bessa',
            'email' => 'pedrobessa@teste.com',
            'password' => Hash::make('teste123'),
            'cpf_cnpj' => '11122233354',
        ]);
    }
}