<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class IndexController extends Controller
{
    public function index()
    {
        $currentDay = Carbon::now()->format('l'); // Mendapatkan nama hari saat ini
        return view('index', compact('currentDay'));
    }
}
