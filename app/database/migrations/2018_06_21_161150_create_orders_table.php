<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('tipas');
            $table->string('adresas', 255);
            $table->integer('plotas')->nullable();
            $table->integer('sklypo_plotas')->nullable();
            $table->integer('kambariu_skaicius')->nullable();
            $table->integer('automobiliu_skaicius')->nullable();
            $table->integer('aukstas')->nullable();
            $table->integer('aukstu_skaicius')->nullable();
            $table->integer('statybos_metai')->nullable();
            $table->string('pastato_tipas', 50)->nullable();
            $table->string('paskirtis', 100)->nullable();
            $table->string('irengimas', 100)->nullable();
            $table->string('sildymas', 100)->nullable();
            $table->string('ypatybes', 100)->nullable();
            $table->string('papildomos_patalpos', 100)->nullable();
            $table->string('papildoma_iranga', 100)->nullable();
            $table->string('apsauga', 100)->nullable();
            $table->string('komentaras', 255)->nullable();
            $table->integer('kaina');
            $table->boolean('renovuotas')->nullable();
            $table->integer('patalpu_skaicius')->nullable();
            $table->string('vanduo', 100)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
