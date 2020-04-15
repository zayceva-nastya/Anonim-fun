<?php
// Тест функции array_map

function speed_test($fun, $arg, $n = 100000)
{
    $time1 = microtime(true);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(true);
    return $time2 - $time1;
}


$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function test1($array)
{
    return array_map(function ($x) {
        return $x * $x;
    }, $array);
};

echo speed_test("test1", $a1) . " - Тест функции array_map";
echo "<br>";





// Тест функции array_filter

$a11 = array(1,-2,3,4,-5,6,-7,-8,9,10);

function test2($array)
{
   return array_filter($array, function($x){
       return $x>=0;
    });
};

echo speed_test("test2", $a11) . " - Тест функции array_filter";
echo "<br>";





// Тест функции array_walk

$a111 = array(1,2,3,4,5,6,7,8,9,10);

function test3($array)
{
   return array_walk($array, function($item, $key){echo "$key => $item <br>";});
};

echo speed_test("test3", $a111) . " - Тест функции array_walk";
echo "<br>";