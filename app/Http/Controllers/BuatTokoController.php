<?php

namespace App\Http\Controllers;

use App\Http\Requests\Toko\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;

class BuatTokoController extends Controller
{
    public function index()
    {
        return view('buattoko');
    }

    public function store(StoreRequest $request)
    {
        Store::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'id_user' => $request->id_user
        ]);
        return redirect("/profil");
    }
}
