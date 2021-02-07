<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableNameRjabatanTypePersonilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('personil', 'personils');
        Schema::dropIfExists('personil');
        Schema::table('personils', function (Blueprint $table) {
            $table->text('c_Rjabatan')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personils', function (Blueprint $table) {
            $table->string('c_Rjabatan')->change();
        });
    }
}
