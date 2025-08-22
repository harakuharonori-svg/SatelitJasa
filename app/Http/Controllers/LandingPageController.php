<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        $data = Kategori::limit(9)->get();
        return view("landingpage", compact("data"));
    }
}