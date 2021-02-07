<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_Rbrevet')->nullable();
            $table->string('c_Rdagri')->nullable();
            $table->string('c_Rdikjur')->nullable();
            $table->string('c_Rdikpol')->nullable();
            $table->string('c_Rdikum')->nullable();
            $table->string('c_Rfamily')->nullable();
            $table->string('c_Rjabatan')->nullable();
            $table->string('c_Rjasa')->nullable();
            $table->string('c_Rluarnegeri')->nullable();
            $table->string('c_Rpangkat')->nullable();
            $table->string('c_Rsmk')->nullable();
            $table->string('c_addrKtr')->nullable();
            $table->string('c_addrOrtu')->nullable();
            $table->string('c_addrRmh')->nullable();
            $table->string('c_asabri')->nullable();
            $table->string('c_asing')->nullable();
            $table->string('c_baju')->nullable();
            $table->string('c_berat')->nullable();
            $table->string('c_celana')->nullable();
            $table->string('c_daerah')->nullable();
            $table->string('c_darah')->nullable();
            $table->string('c_devel')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_jRambut')->nullable();
            $table->string('c_jabatan')->nullable();
            $table->string('c_kelamin')->nullable();
            $table->string('c_keterangan')->nullable();
            $table->string('c_kk')->nullable();
            $table->string('c_kta')->nullable();
            $table->string('c_kulit')->nullable();
            $table->string('c_mata')->nullable();
            $table->string('c_nama')->nullable();
            $table->string('c_nik')->nullable();
            $table->string('c_nivel')->nullable();
            $table->string('c_notes')->nullable();
            $table->string('c_npwp')->nullable();
            $table->string('c_nrp')->nullable();
            $table->string('c_sepatu')->nullable();
            $table->string('c_sidik1')->nullable();
            $table->string('c_sidik2')->nullable();
            $table->string('c_status')->nullable();
            $table->string('c_suku')->nullable();
            $table->string('c_telpHP')->nullable();
            $table->string('c_telpKantor')->nullable();
            $table->string('c_telpOrtu')->nullable();
            $table->string('c_telpRumah')->nullable();
            $table->string('c_tglNikah')->nullable();
            $table->string('c_tgllahir')->nullable();
            $table->string('c_tinggi')->nullable();
            $table->string('c_tmpNikah')->nullable();
            $table->string('c_tmplahir')->nullable();
            $table->string('c_tmtjabatan')->nullable();
            $table->string('c_tmtpangkat')->nullable();
            $table->string('c_tmtperwira')->nullable();
            $table->string('c_topi')->nullable();
            $table->string('c_wRambut')->nullable();
            $table->string('ref_agama')->nullable();
            $table->string('ref_pangkat')->nullable();
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
        Schema::dropIfExists('personil');
    }
}
