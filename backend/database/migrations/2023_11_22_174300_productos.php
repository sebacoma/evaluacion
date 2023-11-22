<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('nombre');
            $table->floatval('precio')->nullable();
            $table->text('descripcion');
            $table->url("img");
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
