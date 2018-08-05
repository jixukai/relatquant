<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartsController extends Controller
{
    public function chartdata()
    {
        $range = \Carbon\Carbon::now()->subDays(730);
        $data = DB::table('web_cpi_ppi')
                        ->select('date', 'cpi', 'ppi')
                        ->where('date', '>=', $range)
                        // ->orderBy('id', 'desc')
                        // ->take(10)
                        ->get();
        
        $result = $data->toArray();
        return json_encode($result);
    }

}
