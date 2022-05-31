<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicProductionController extends Controller
{
    public function index()
    {
        return view('academic_production.index');
    }
}
