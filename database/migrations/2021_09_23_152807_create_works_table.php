<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('works', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('description');
      $table->string('logo_image');
      $table->string('monography');
      $table->string('author', 100);
      $table->string('email_author', 100);
      $table->string('member_one', 100)->nullable();
      $table->string('email_one', 100)->unique()->nullable();
      $table->string('member_two', 100)->nullable();
      $table->string('email_two', 100)->unique()->nullable();
      $table->string('member_three', 100)->nullable();
      $table->string('email_three', 100)->unique()->nullable();
      $table->string('member_four', 100)->nullable();
      $table->string('email_four', 100)->unique()->nullable();
      $table->unsignedBigInteger('user_id');
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
    Schema::dropIfExists('works');
  }
}
