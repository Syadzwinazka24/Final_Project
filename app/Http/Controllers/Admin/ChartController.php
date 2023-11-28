<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    public function chart(){
        $user = User::select(DB::raw("COUNT(*) as count"))
        ->groupBy(DB::raw("role"))
        ->pluck('count');

        return view('Admin.Chart.chart', compact('user'));
    }
}
