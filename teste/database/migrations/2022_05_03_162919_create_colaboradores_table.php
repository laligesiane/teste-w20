<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome'); //obrigatorio
            $table->integer('telefone'); //obrigatorio
            $table->string('email')->unique(); //obrigatorio
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('data_nascimento')->nullable();

            $table->unsignedInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('colaboradores', function ($table) {
            $table->dropColumn('id');
            $table->dropColumn('nome');
            $table->dropColumn('telefone');
            $table->dropColumn('email');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('id_empresa');
        });
    }
};
