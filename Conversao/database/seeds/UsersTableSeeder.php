<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \DB::table('users')->delete();

          \DB::table('users')->insert(array (
              0 =>
              array (
                  'nome' => 'Hector',
                  'sobrenome' => 'Queiróz',
                  'data_nascimento' => 2001-01-16,
                  'telefone' => 01125741802,
                  'celular' => 925741802,
                  'email' => 'hectorqrs@gmail.com',
                  'senha' => '$2y$10$NZ0RPbaiENIv5C6rn3JQEuAmEwCOfRkIq2FuGcwcCnmwXs.x6Lc7q',
                  'genero' => 'masculino',
                  'cpf' => 47970897843,
                  'endereco' => 'Av. Dr. Benedito E. dos Santos',
                  'numero' => 377,
                  'complemento' => null,
                  'bairro' => 'Vila Maria',
                  'CEP' => 02136000,
                  'cidades_fk' => 3828,
                  'ufs_fk' => 26,
              ),
    }
}
