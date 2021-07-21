<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Table extends Controller
{
    public function index()
    {
        $outils =[
            (object)[
                'crayons'=>'crayon',
                'gommes'=>'gomme',
                'bics'=>'bic',
                'regles'=>'regle',
            ]
        ];


        return view('pages.table', compact('outils'));
    }
}
