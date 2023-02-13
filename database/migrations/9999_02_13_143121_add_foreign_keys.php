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
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            // 2) Vado a creare una foreignkey alla tabella "posts"
            $table->foreignId('person_id')
                ->constrained();
        });

        Schema::table('person_details', function (Blueprint $table) {

            // 2) Imposto la colonna "person_id" come chiave primaria
            $table->primary('person_id');

            // 2) Vado a creare una foreignkey alla tabella "person_details"
            $table->foreignId('person_id')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            // 3) dalla struttura della tabella "posts" prendo la chiave "posts_person_id_foreign"
            // Vado ad eliminare la relazione.
            $table->dropForeign('posts_person_id_foreign');
            // Vado ad eliminare la colonna.
            $table->dropColumn('person_id');
        });

        Schema::table('person_details', function (Blueprint $table) {

            $table->dropForeign('person_details_person_id_foreign');
            $table->dropColumn('person_id');
        });
    }
};