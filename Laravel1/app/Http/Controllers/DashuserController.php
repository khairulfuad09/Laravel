<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashuserController extends Controller
{
    public function index()
    {
        $data['cars'] = DB::table('cars')->paginate(5);
        return view('dashboarduser', $data);
    }
}
