<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->string('priceChange')->nullable();
            $table->double('lastPrice')->nullable();
            $table->double('lastQty')->nullable();
            $table->double('bidPrice')->nullable();
            $table->double('bidQty')->nullable();
            $table->double('openPrice')->nullable();
            $table->double('highPrice')->nullable();
            $table->double('lowPrice')->nullable();
            $table->double('volume')->nullable();
            $table->double('quoteVolume')->nullable();
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
        Schema::dropIfExists('crypto_tickets');
    }
}
