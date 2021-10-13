<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('roles')->insert([
      [
        'name' => 'Administrador',
        'label' => 'Perfil com acesso completo ao sistema',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ],
      [
        'name' => 'Orientador',
        'label' => 'Perfil com acesso a visualização de trabalhos, cadastro e edição de ideias',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ],
      [
        'name' => 'Estudante',
        'label' => 'Perfil com acesso a cadastro e edição de trabalhos, visualização de ideias',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]
    ]);

    DB::table('role_user')->insert([
      [
        'role_id' => '1',
        'user_id' => '1',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'role_id' => '3',
        'user_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'role_id' => '3',
        'user_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'role_id' => '2',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'role_id' => '2',
        'user_id' => '5',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);
  }
}
