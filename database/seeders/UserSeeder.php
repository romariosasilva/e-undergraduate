<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      [
        'name' => 'Administrador',
        'email' => 'admin@e-undergraduate.com.br',
        'password' => Hash::make('4dm1n@123'),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'Romário Sérgio Aparecido Silva',
        'email' => 'romario.silva@fatec.sp.gov.br',
        'password' => Hash::make('R0m4r10@123'),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'Vagner Matos do Carmo',
        'email' => 'vagner.carmo@fatec.sp.gov.br',
        'password' => Hash::make('V4gn3r@123'),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'Jeferson De Souza Dias',
        'email' => 'jeferson.dias@fatec.sp.gov.br',
        'password' => Hash::make('J3f3rs0n@123'),
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'Sandra Bianca Henriques Geroldo',
        'email' => 'sandra.geroldo@fatec.sp.gov.br',
        'password' => Hash::make('S4ndr4@123'),
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);
  }
}
