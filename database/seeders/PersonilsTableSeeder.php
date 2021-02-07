<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_path = realpath(__DIR__ . '/../../assets/t_personil.json');
        $json = json_decode(file_get_contents($file_path), true);

        for ($i = 0; $i < count($json); $i++){
            DB::table('personils')->insert([
                'c_Rbrevet' => $json[$i]['c_Rbrevet'],
                'c_Rdagri' => $json[$i]['c_Rdagri'],
                'c_Rdikjur' => $json[$i]['c_Rdikjur'],
                'c_Rdikpol' => $json[$i]['c_Rdikpol'],
                'c_Rdikum' => $json[$i]['c_Rdikum'],
                'c_Rfamily' => $json[$i]['c_Rfamily'],
                'c_Rjabatan' => $json[$i]['c_Rjabatan'],
                'c_Rjasa' => $json[$i]['c_Rjasa'],
                'c_Rluarnegeri' => $json[$i]['c_Rluarnegeri'],
                'c_Rpangkat' => $json[$i]['c_Rpangkat'],
                'c_Rsmk' => $json[$i]['c_Rsmk'],
                'c_addrKtr' => $json[$i]['c_addrKtr'],
                'c_addrOrtu' => $json[$i]['c_addrOrtu'],
                'c_addrRmh' => $json[$i]['c_addrRmh'],
                'c_asabri' => $json[$i]['c_asabri'],
                'c_asing' => $json[$i]['c_asing'],
                'c_baju' => $json[$i]['c_baju'],
                'c_berat' => $json[$i]['c_berat'],
                'c_celana' => $json[$i]['c_celana'],
                'c_daerah' => $json[$i]['c_daerah'],
                'c_darah' => $json[$i]['c_darah'],
                'c_devel' => $json[$i]['c_devel'],
                'c_email' => $json[$i]['c_email'],
                'c_jRambut' => $json[$i]['c_jRambut'],
                'c_jabatan' => $json[$i]['c_jabatan'],
                'c_kelamin' => $json[$i]['c_kelamin'],
                'c_keterangan' => $json[$i]['c_keterangan'],
                'c_kk' => $json[$i]['c_kk'],
                'c_kta' => $json[$i]['c_kta'],
                'c_kulit' => $json[$i]['c_kulit'],
                'c_mata' => $json[$i]['c_mata'],
                'c_nama' => $json[$i]['c_nama'],
                'c_nik' => $json[$i]['c_nik'],
                'c_nivel' => $json[$i]['c_nivel'],
                'c_notes' => $json[$i]['c_notes'],
                'c_npwp' => $json[$i]['c_npwp'],
                'c_nrp' => $json[$i]['c_nrp'],
                'c_sepatu' => $json[$i]['c_sepatu'],
                'c_sidik1' => $json[$i]['c_sidik1'],
                'c_sidik2' => $json[$i]['c_sidik2'],
                'c_status' => $json[$i]['c_status'],
                'c_suku' => $json[$i]['c_suku'],
                'c_telpHP' => $json[$i]['c_telpHP'],
                'c_telpKantor' => $json[$i]['c_telpKantor'],
                'c_telpOrtu' => $json[$i]['c_telpOrtu'],
                'c_telpRumah' => $json[$i]['c_telpRumah'],
                'c_tglNikah' => $json[$i]['c_tglNikah'],
                'c_tgllahir' => $json[$i]['c_tgllahir'],
                'c_tinggi' => $json[$i]['c_tinggi'],
                'c_tmpNikah' => $json[$i]['c_tmpNikah'],
                'c_tmplahir' => $json[$i]['c_tmplahir'],
                'c_tmtjabatan' => $json[$i]['c_tmtjabatan'],
                'c_tmtpangkat' => $json[$i]['c_tmtpangkat'],
                'c_tmtperwira' => $json[$i]['c_tmtperwira'],
                'c_topi' => $json[$i]['c_topi'],
                'c_wRambut' => $json[$i]['c_wRambut'],
                'ref_agama' => $json[$i]['ref_agama'],
                'ref_pangkat' => $json[$i]['ref_pangkat']
            ]);
        }
    }
}
