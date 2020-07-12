<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return \Auth::user()->jadwal()->latest()->get();
    }

    public function store(Request $req)
    {
        $this->validate($req,[
            "nama" => "required",
            "waktu" => "required"
        ]);

        return \Auth::user()->jadwal()->create($req->all());
    }
}