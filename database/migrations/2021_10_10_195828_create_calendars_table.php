<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('calendars', function (Blueprint $table) {
      $table->id();
      $table->timestamp('meeting');
      $table->unsignedBigInteger('work_id');
      $table->unsignedBigInteger('user_id');
      $table->foreign('work_id')->references('id')->on('works');
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
    Schema::dropIfExists('calendars');
  }
}
