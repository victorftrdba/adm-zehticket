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
            'name' => 'Administrador ZehTicket',
            'email' => 'adm@zehticket.com.br',
            'password' => Hash::make('gHz@123bnA204mN'),
            'cpf_cnpj' => '11693743957',
            'is_admin' => true,
        ]);
    }
}