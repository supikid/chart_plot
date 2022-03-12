<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\PlotLib;

class ChartsController extends Controller
{
    public function index(Request $request){
        return view('index');
    }

    public function data(Request $request){
        $pl = new PlotLib();
        $plot_points = $pl->getPlotPoints($request->start, $request->end, $request->pma, $request->pmb, $request->pmc);

        $plots = [
            [1,81],
            [1,124],
        ];

        $data = [
            'plots' => $plot_points,
        ];
        return $data;
    }
}
