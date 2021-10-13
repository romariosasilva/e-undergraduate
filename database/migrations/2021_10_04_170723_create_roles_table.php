<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('roles', function (Blueprint $table) {
      $table->id();
      $table->string('name', 50);
      $table->string('label', 100);
      $table->timestamps();
    });

    Schema::create('role_user', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('role_id');
      $table->unsignedBigInteger('user_id');
      $table->foreign('role_id')->references('id')->on('roles');
      $table->foreign('user_id')->references('id')->on('users');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('role_id');
    Schema::dropIfExists('roles');
  }
}
