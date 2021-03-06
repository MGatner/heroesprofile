<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeasonGameVersions extends Migration
{
  /**
  * The database schema.
  *
  * @var Schema
  */
  protected $schema;

  /**
  * Create a new migration instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->schema = Schema::connection(config('database.default'));
  }

  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    $this->schema->create('season_game_versions', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->integer('id')->autoIncrement();
      $table->integer('season');
      $table->string('game_version', 45);
      $table->dateTime('date_added')->nullable();

      $table->unique(['season', 'game_version']);
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    $this->schema->dropIfExists('season_game_versions');
  }
}
