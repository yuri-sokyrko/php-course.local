<?php
/**
 * HOME TASK ONE
 */
$strings = [
    "Hello!",
    "I'm function which can hadle array displaying on your screen",
    "Also I can tell you everything about your server",
    "Your php version is - " . PHP_VERSION,
    "Your're working in - " . __DIR__,
];

arrToParagraphs($strings);

echo '<br><hr><br>';

$calcArr = [1, 10, 50, -4, -30, 0, 50, 648, -548, 3, 4];
$calcArrTwo = [0, 7, 2];
arrCalculator($calcArr, 'sum');
arrCalculator($calcArrTwo, 'sum');
arrCalculator($calcArr, 'average');
arrCalculator($calcArrTwo, 'average');
arrCalculator($calcArr, 'max');
arrCalculator($calcArrTwo, 'max');
arrCalculator($calcArr, 'min');
arrCalculator($calcArrTwo, 'min');
arrCalculator($calcArr, 'bubleSort');
arrCalculator($calcArrTwo, 'bubleSort');

echo "<hr><br>";

calcNumbers('sum', 1, 3, 2);
calcNumbers('substract', 1, 3, 2);

echo "<hr><br>";

multiplyTable(3, 4);
multiplyTable(9, 9);
multiplyTable(16, 16);

echo "<hr><br>";

$sortArr = randArr(10000, 0, 10000);
$timeStart = 0;
$timeEnd = 0;
// echo '<pre>';
// print_r($sortArr);
// echo '<pre>';
echo "Buble Sort<br>";
$timeStart = microtime(true);
bubleSort($sortArr);
$timeEnd = microtime(true);

echo "Time start - " . $timeStart . '<br>';
echo "Time end - " . $timeEnd . '<br><br>';
echo "Time total - " . ($timeEnd - $timeStart) . '<br><br>';

$timeStart = 0;
$timeEnd = 0;
echo "Quick Sort<br>";
$timeStart = microtime(true);
quickSort($sortArr);
$timeEnd = microtime(true);
echo "Time start - " . $timeStart . '<br>';
echo "Time end - " . $timeEnd . '<br><br>';
echo "Time total - " . ($timeEnd - $timeStart) . '<br><br>';

echo '<hr><br>';

oddNumbers(0, 10);
oddNumbers(60, 10);
oddNumbers(-20, 9);

echo '<hr><br>';

$strOne  = 'ABBA';
$strTwo  = 'MAMBA';
$strThree = 'TENET';

echo "String '$strOne' - palindrom - " . palindrom($strOne) . '<br>';
echo "String '$strTwo' - palindrom - " . palindrom($strTwo) . '<br>';
echo "String '$strThree' - palindrom - " . palindrom($strThree) . '<br>';

/**
 * FUNCTIONS
 */
function arrToParagraphs($arr) {
    foreach($arr as $item) {
        echo '<p>' . htmlspecialchars((string)$item) . '</p>';
    }
}

function arrCalculator($arr = 0, $action = '') {
    echo 'This function can calculate your array!<br>';
    echo 'Your action: ' . $action . '<br>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $result;

    switch ($action) {
        case 'sum':
            $result = 0;
            for($i = 0, $length = count($arr); $i < $length; $i++) {
                $result += $arr[$i];
            }
            break;
        case 'average':
            $result = 0;
            for($i = 0, $length = count($arr); $i < $length; $i++) {
                $result += $arr[$i];
            }
            $result /= $length;
            break;
        case 'max':
            $result = getArrMax($arr);
            break;
        case 'min':
            $result = getArrMin($arr);
            break;
        case 'bubleSort':
            $result = bubleSort($arr, true);
            break;
        default:
            echo 'It seems that your action is empty :(';
            break;
    }

    if(isset($result) && gettype($result) != 'array') {
        echo 'Result = ' . $result . '<br><br><br>';
    } elseif(gettype($result) == 'array') {
        echo 'Result: <br><pre>';
        print_r($result);
        echo '</pre><br><br>';
    } else {
        echo gettype($result);
    }
}

function getArrMin($arr) {
    for($i = 0, $length = count($arr); $i < $length; $i++) {
        if($i != 0) {
            if($result > $arr[$i]) {
                $result = $arr[$i];
            }
        } else {
            $result = $arr[$i];
        }
    }

    return $result;
}

function getArrMax($arr) {
    for($i = 0, $length = count($arr); $i < $length; $i++) {
        if($i != 0) {
            if($result < $arr[$i]) {
                $result = $arr[$i];
            }
        } else {
            $result = $arr[$i];
        }
    }

    return $result;
}

function bubleSort($arr, $return = false) {
    $length = count($arr);
    $tmp;

    for($i = 0; $i < $length; $i++) {
        for($j = $length-1; $j > $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j-1];
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    if($return == true) {
        return $arr;
    }
}

function calcNumbers($action = '') {
    echo 'This function can calculate any amount of numbers! First parameter is an action sum or substract<br>';

    $params = func_get_args();
    $result = 0;

    echo '<pre>';
    print_r($params);
    echo '</pre>';
    
    if(gettype($action) != 'string') {
        echo 'First parameter is not a STRING.';
        return;
    } else {
        switch ($action) {
            case 'sum':
                for($i = 1; $i < count($params); $i++) {
                    $result += $params[$i];
                }
                echo $result . '<br><br>';
                break;
            case 'substract':
                $result = $params[1];
                for($i = 2; $i < count($params); $i++) {
                    $result -= $params[$i];
                }
                echo $result . '<br><br>';
                break;
            default:
                echo 'It seems that your action is empty :(';
                break;
        }
    }
}

function multiplyTable($a, $b) {
    echo 'This function can make a multiply table ' . $a . ' * ' . $b . '<br>';

    if(gettype($a) == 'integer' && gettype($b) == 'integer') {
        echo '<table border="1" cellspacing="0" cellpadding="0">';
        for($i = 1; $i <= $a; $i++ ) {
            echo '<tr>';

            for($j = 1; $j <= $b; $j++) {
                echo '<td style="padding:5px" colspan="0">' . $j * $i . '</td>';
            }

            echo '</tr>';
        }
        echo '</table><br>';
    } else {
        echo 'Error, one of your number is not an integer!<br><br>';
    }
}

function quickSort($array) {
    $left = 0;
    $right = count($array) - 1;

    my_sort($array, $left, $right);
}

function my_sort(&$array, $left, $right) {
    $l = $left;
    $r = $right;

    $center = $array[(int)($left + $right) / 2];

    do {
        while($array[$r] > $center) {
            $r--;
        }

        while($array[$l] < $center) {
            $l++;
        }

        if($l <= $r) {
            list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
            $l++;
            $r--;
        }
    } while ($l <= $r);

    if($r > $left) {
        my_sort($array, $left, $r);
    }

    if($l < $right) {
        my_sort($array, $l, $right);
    } 
}

function randArr( $N, $min = 0, $max = 100) {
    return array_map(
        function() use( $min, $max) {
            return rand( $min, $max);
        },
        array_pad( [], $N, 0)
    );
}

function oddNumbers($start, $end) {
    if($start > $end) {
        echo "<br>That's all<br><br>";
        return;
    }

    $s = $start;

    if(($s % 2) == 0) {
        $s++;
        oddNumbers($s, $end);
    } else {
        echo $s . ', ';
        $s++;
        oddNumbers($s, $end);
    }
}

function palindrom($string) {
    $revesre = strrev($string);
    
    if($revesre == $string) {
        return 1;
    }

    return 0;
}