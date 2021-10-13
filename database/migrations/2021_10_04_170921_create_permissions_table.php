<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('permissions', function (Blueprint $table) {
      $table->id();
      $table->string('name', 50);
      $table->string('label', 100);
      $table->timestamps();
    });

    Schema::create('permission_role', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('permission_id');
      $table->unsignedBigInteger('role_id');
      $table->foreign('permission_id')->references('id')->on('permissions');
      $table->foreign('role_id')->references('id')->on('roles');
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
    Schema::dropIfExists('permission_role');
    Schema::dropIfExists('permissions');
  }
}
