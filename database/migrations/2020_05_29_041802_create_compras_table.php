<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->Increments('id_compras');
            $table->integer('cantidad');
            $table->double('monto');
            $table->date('fecha');
            $table->integer('id_boleto')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_boleto')->references('id_boleto')->on('boletos');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
