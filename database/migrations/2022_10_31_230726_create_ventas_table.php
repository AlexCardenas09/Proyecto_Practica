<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto');
            $table->float('valor');
            $table->int('cantidad');
            $table->string('tipoProducto');
            $table->date('fechacompra');

            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('user_id')->constrained('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
