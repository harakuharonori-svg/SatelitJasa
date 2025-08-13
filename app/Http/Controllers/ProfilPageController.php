<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilPageController extends Controller
{
    public function index() {
        return view("profilpage");
    }
}
