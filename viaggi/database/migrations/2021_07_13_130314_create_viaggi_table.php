<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pacchetto', 30);
            $table->string('luogo_di_partenza', 30);
            $table->date('data_di_partenza');
            $table->tinyInteger('durata_giorni_di_viaggio');
            $table->float('price', 6, 2);
            $table->text('descrizione')->nullable();
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
        Schema::dropIfExists('viaggi');
    }
}
