<?php
 function mysolution($mymatrix) {
    $ans = [];
    for ($i = 0; $i < count($mymatrix); $i++) {
        $rowValue = max($mymatrix[$i]);
        $rowValue_i = array_search($rowValue, $mymatrix[$i]);
        $minCol = true;
        for ($j = 0; $j < count($mymatrix); $j++) {
            if ($mymatrix[$j][$rowValue_i] < $rowValue) {
                $minCol = false;
                break;
            }
        }
        if ($minCol) {
            $ans[] = $rowValue;
        }
    }
    return $ans;
}

 print_r(mysolution(  [[5,16,20],[9,11,18],[15,16,17]])
);
