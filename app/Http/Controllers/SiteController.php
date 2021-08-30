<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function quemSomos()
    {
        return view('site.quemSomos');
    }

    public function projetos()
    {
        return view('site.projetos');
    }

    public function faleConosco()
    {
        return view('site.faleConosco');
    }
}
