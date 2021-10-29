<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('permissions')->insert([
      [
        'name' => 'create_user',
        'label' => 'Acesso a criação de usuários',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'read_user',
        'label' => 'Acesso a visualização de usuários cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'update_user',
        'label' => 'Acesso a edição de usuários cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'delete_user',
        'label' => 'Acesso a exclusão de usuários cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'create_work',
        'label' => 'Acesso a criação de trabalhos',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'read_work',
        'label' => 'Acesso a visualização de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'update_work',
        'label' => 'Acesso a dição de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'delete_work',
        'label' => 'Acesso a exclusão de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'create_idea',
        'label' => 'Acesso a criação de ideias',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'read_idea',
        'label' => 'Acesso a visualização de ideias cadastradas',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'update_idea',
        'label' => 'Acesso a dição de ideias cadastradas',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'delete_idea',
        'label' => 'Acesso a exclusão de ideias cadastradas',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);

    DB::table('permission_role')->insert([
      /**
       * Acesso dos orientadores
       */
      [
        'permission_id' => '6', // Acesso a visualização de trabalhos
        'role_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '9', // Acesso a criação de ideias
        'role_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '11', // Acesso a edição de ideias
        'role_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '12', // Acesso a exclusão de ideias
        'role_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],

      /**
       * Acesso dos alunos
       */
      [
        'permission_id' => '5', // Acesso a criação de trabalhos
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '7', // Acesso a edição de trabalhos
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '8', // Acesso a exclusão de trabalhos
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '10', // Acesso a visualização de ideias
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);
  }
}
