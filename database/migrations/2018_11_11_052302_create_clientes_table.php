<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('calle',100);
            $table->string('num_ext',100)->default("N/A");
            $table->string('num_int',100)->default("N/A");
            $table->string('colonia',100);
            $table->string('ciudad',100);
            $table->string('estado',100);
            $table->string('cod_postal',100);
            $table->string('tel',100);
            $table->string('cel',100);
            $table->string('email',100);
            $table->string('rfc',100);
            $table->integer('status')->default(1);;
            $table->integer('user');
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
        //
    }
}
