<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Personils;

class PersonilController extends Controller
{
    public function allPersonil()
    {
        $personil = DB::select("SELECT * FROM personils");
//        $personil = Personils::orderBy('c_nama','asc')->paginate(10);
        return response()->json([
            'status' => 'success',
            'jumlah' => count($personil),
            'data' => $personil]);
    }
}
