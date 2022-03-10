<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPeriodos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('periodos', function (Blueprint $table) {
            //
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->bigInteger('empleadoId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periodos', function (Blueprint $table) {
            //
        });
    }
}
