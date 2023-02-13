<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  1) Creo la "person_details" Migration.
    public function up()
    {
        Schema::create('person_details', function (Blueprint $table) {
            // Commento "$table->id()" per impostare la colonna "person_id" come chiave primaria
            // $table->id();

            $table->string('phone', 24)->nullable();
            $table->string('address');
            $table->string('avatar')->nullable();

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
        Schema::dropIfExists('person_details');
    }
};