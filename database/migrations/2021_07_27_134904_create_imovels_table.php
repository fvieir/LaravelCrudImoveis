<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('lagradouroEndereco');
            $table->string('bairroEndereco');
            $table->integer('numeroEndereco');
            $table->string('cepEndereco');
            $table->string('cidadeEndereco');
            $table->float('preco');
            $table->integer('qtdQuartos');
            $table->enum('tipo',['apartamento' , 'casa' , 'kitnet']);
            $table->enum('finalidade' , ['venda' , 'locacao']);
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
        Schema::dropIfExists('imovels');
    }
}
