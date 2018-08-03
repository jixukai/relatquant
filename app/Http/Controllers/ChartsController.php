<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartsController extends Controller
{
    public function chartdata()
    {
        // $now = Carbon::now();
        $range = \Carbon\Carbon::now()->subDays(365);
        $data = DB::table('web_cpi_ppi')
                        ->select('date', 'cpi', 'ppi')
                        ->where('date', '>=', $range)
                        // ->orderBy('id', 'desc')
                        // ->take(3)
                        ->get();
        // foreach ($chartdata as $mmp) {
        //     echo $mmp;
        // }
        $result = $data->toArray();
        // return $a;
        $json = json_encode($result);
        return $json;
        // return json_encode($result);
        // $now = Carbon::now();
        // echo $now;
        // $json = json_encode($data);
        // echo "$json";
    }

}
