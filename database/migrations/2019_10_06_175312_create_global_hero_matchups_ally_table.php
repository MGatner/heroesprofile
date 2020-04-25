<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalHeroMatchupsAllyTable extends Migration
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
        $this->schema->create('global_hero_matchups_ally', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->string('game_version', 45);
          $table->tinyInteger('game_type');
          $table->tinyInteger('league_tier');
          $table->tinyInteger('hero_league_tier');
          $table->tinyInteger('role_league_tier');
          $table->tinyInteger('game_map');
          $table->integer('hero_level')->unsigned()->default(0);
          $table->tinyInteger('hero');
          $table->tinyInteger('ally');
          $table->tinyInteger('mirror');
          $table->integer('region');
          $table->tinyInteger('win_loss');
          $table->integer('games_played');

          $table->primary(['game_version', 'game_type', 'league_tier', 'hero_league_tier', 'role_league_tier','game_map', 'hero_level', 'hero', 'ally', 'mirror', 'region', 'win_loss'], 'Primary_Index');
          $table->index(['game_version', 'game_type', 'hero', 'league_tier', 'hero_league_tier', 'role_league_tier', 'game_map', 'hero_level', 'ally', 'mirror', 'region', 'win_loss', 'games_played'], 'Base_Index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('global_hero_matchups_ally');
    }
}
