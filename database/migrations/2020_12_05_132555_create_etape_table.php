<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etape', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('number');
            $table->string('departure');
            $table->string('arrival');
            $table->dateTime('departure_date', 0);
            $table->dateTime('arrival_date', 0);
            $table->integer("voyage_id");
            $table->string('seat')->nullable();
            $table->string('gate')->nullable();
            $table->string('baggage_drop')->nullable();
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
        Schema::dropIfExists('etape');
    }
}
