<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('ideas')->insert([
      [
        'title' => 'The standard chunk of Lorem',
        'description' => 'Ipsum used since the 1500s is reproduced below for those interested.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'Ipsum used standard chunk of Lorem',
        'description' => 'Standard chunk is reproduced below for those.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'Latin professor at Hampden-Sydney',
        'description' => 'The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'Long established fact',
        'description' => 'The years, sometimes by accident, sometimes on purpose (injected humour and the like).',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'There are many variations',
        'description' => 'All the Lorem Ipsum generators on the Internet.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'Contrary to popular belief',
        'description' => 'Hampden-Sydney College in Virginia, looked up one.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'title' => 'The generated Lorem Ipsum',
        'description' => 'The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
        'user_id' => '4',
        'created_at' => now(),
        'updated_at' => now()
      ]
    ]);
  }
}
