<?php

namespace App\Http\Controllers;

use App\Libs\PlotLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChartsController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function data(Request $request)
    {
        $pl = new PlotLib();
        // 分割数
        $num = 1000;
        $plot_points = $pl->getPlotPoints($request->start, $request->end, $request->pma, $request->pmb, $request->pmc, $num);
        $data = [
            'plots' => $plot_points,
        ];
        return $data;
    }
}
