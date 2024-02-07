<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserStatisticsController extends Controller
{
    public function index()
    {
        $registrosPorFecha = Lawyer::select('user_id',DB::raw('DATE(created_at) as fecha'), DB::raw('count(*) as cantidad'))
            ->groupBy('fecha')
            ->groupBy('user_id')
            ->orderBy('fecha','desc')
            ->orderBy('user_id','asc')
            ->get();
        return view('admin.user_statistics',[
            'lista' => $registrosPorFecha
        ]);
    }
}
