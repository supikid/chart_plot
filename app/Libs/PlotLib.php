<?php

namespace App\Libs;

class PlotLib
{
    public function getPlotPoints($start, $end, $param_a, $param_b, $param_c, $split){
        $ret = [];
        // 分割数
        $num = $split;
        // x座標の決定
        $interval = ($end - $start) / $num;
        
        for($i = 0; $i < $num; $i++){
            $x = round($start + $interval * $i, 6);
            $y = round($param_a * pow($x, $param_b) + $param_c, 6);
            if(!is_infinite($y)){
                $ret[] = array($x, $y);
            }
        }

        return $ret;
    }
}