<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forums;
use DB;
//use DataTables;

class ForumsController extends Controller
{
    public function lista()
    {
        /****************************************
        * Rapido
        */
        //return datatables()->of(DB::table('forums'))->toJson();

        /****************************************
         * Lento
         */
        return datatables()->of(Forums::all())->toJson();
    }
}
