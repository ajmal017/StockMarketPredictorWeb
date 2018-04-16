<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_info', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('market_name', 10);
            $table->date('date');
            $table->char('prediction', 20);
            $table->double('prev_day_high', 8, 8);
            $table->double('prev_day_low', 8, 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market_info');
    }
}
