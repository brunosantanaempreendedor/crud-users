<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crie uma instância do Faker configurada para o Brasil
        $faker = Faker::create('pt_BR');

        // Insere os dados fictícios na tabela 'users'
        DB::table('users')->insert([
            'uuid' => Uuid::uuid4(),
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('123456789'),
            'created_at' => now(),
        ]);
    }
}
