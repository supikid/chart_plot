<?php

namespace App\Libs;

class PlotLib
{
    public function getPlotPoints($start, $end, $param_a, $param_b, $param_c){
        $ret = [];
        // 分割数
        $num = 300;
        // x座標の決定
        $interval = ($end - $start) / $num;
        
        for($i = 0; $i < $num; $i++){
            $x = $start + $interval * $i;
            $y = $param_a * pow($x, $param_b) + $param_c;
            $ret[] = array($x, $y);
        }

        return $ret;
    }
}