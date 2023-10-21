<?php

namespace App\Http\Controllers;

use App\Models\kabarDesa;
use App\Models\perangkatDesa;
use App\Models\profilDesa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index' ,[
            "profilDesas" => profilDesa::all(),
            "kabarDesas" => kabarDesa::latest()->paginate(4)
        ]);
    }


    public function show(profilDesa $id)
    {

        if ($id->id == '5') {
            $images = perangkatDesa::get();
            return view('dashboard.dashboardPerangkatDesa',compact('images')
        );
        } else {
            return view('dashboard.dashboardProfilDesa',[
                "profilDesa" => $id
        ]);
        }


    }
}
