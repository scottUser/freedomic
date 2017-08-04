<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOAuthsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('o_auths', function (Blueprint $table) {
      $table->increments('id');
      $table->string('type', 12)->default('weixin');
      $table->string('openid');
      $table->string('nickname')->nullable();
      $table->string('avatar')->nullable();
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
    Schema::dropIfExists('o_auths');
  }
}
