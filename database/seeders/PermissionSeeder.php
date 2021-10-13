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
        'name' => 'view_user',
        'label' => 'Acesso a visualização de usuários cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'edit_user',
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
        'name' => 'view_work',
        'label' => 'Acesso a visualização de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'edit_work',
        'label' => 'Acesso a dição de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'name' => 'delete_work',
        'label' => 'Acesso a exclusão de trabalhos cadastrados',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);

    DB::table('permission_role')->insert([
      [
        'permission_id' => '1',
        'role_id' => '2',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '4',
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '5',
        'role_id' => '3',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'permission_id' => '6',
        'role_id' => '1',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);
  }
}
