<?php

namespace App\Http\Controllers\Exhibitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExhibitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('exhibitor.index');
    }
}
