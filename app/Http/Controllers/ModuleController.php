<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function factoryEfficiency()
    {
        return view('module.factory_efficiency');
    }
}
