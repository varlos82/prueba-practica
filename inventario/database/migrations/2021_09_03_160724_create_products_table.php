<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id')->unsigned();
            $table->string('nombre_de_producto', 200);
            $table->string('referencia', 100)->nullable();
            $table->integer('precio', false, false)->length(10)->nullable();
            $table->integer('peso', false, false)->length(10)->nullable();
            $table->string('categoria', 100)->nullable();
            $table->integer('stock', false, false)->length(10)->nullable();
            $table->date('fecha_de_creación')->nullable();
            $table->dateTime('fecha_de_ultima_venta')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
