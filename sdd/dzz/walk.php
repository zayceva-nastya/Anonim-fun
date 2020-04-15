<pre>
<?php

function speed_test($arr, $fun, $arg)
{
    $time1 = microtime(TRUE);
    
    foreach ($arr as $k => $v) {
        for ($i = 0; $i < count($arg); $i++) {
        $n =$fun($arg);
        }
    $n($arr);
    }
    $time2 = microtime(TRUE);

    return $time2 - $time1;
}

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function test3($array)
{
    return array_walk($array, function ($item, $key) {
        echo "$key => $item <br>";
    });
};

function walk_test($array)
{
    foreach ($array as $key => $value) {
        echo "$key -> $value<br>";
    }
};
// print_r(walk_test($a));

function walk_test1($array)
{

    for ($i = 0; $i < count($array); $i++) {
        echo "$i -> $array[$i]<br>";
    }
}
// print_r(walk_test1($a));

function walk_test2($array)
{
    $i = 0;
    while ($i < count($array)) {
        echo "$i -> $array[$i]<br>";
        $i++;
    }
}
// print_r(walk_test2($a));

echo speed_test("test3", $a) . "<br>";
echo speed_test("walk_test", $a, "") . "<br>";
echo speed_test("walk_test1", $a) . "<br>";
echo speed_test("walk_test2", $a);
