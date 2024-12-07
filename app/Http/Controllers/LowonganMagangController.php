<?php

namespace App\Http\Controllers;

use App\Models\LowonganMagang;
use Illuminate\Http\Request;

class LowonganMagangController extends Controller
{
    public function index()
    {
        $LowonganMagang= LowonganMagang::all();
       
        return view('index', compact('LowonganMagang'));
    }

}
