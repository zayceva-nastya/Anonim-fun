<pre>
<?php
function speed_test($fun, $arg, $n = 100000)
{
    $time1 = microtime(TRUE);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(TRUE);

    return $time2 - $time1;
}



$my_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$a2 = array_map(function ($x) {
    return $x * $x;
}, $my_array);

function sqv($array)
{
    return array_map(function ($x) {
        return $x * $x;
    }, $array);
}

function sqv_2($array)
{
    foreach ($array as $value) {
        $arr1[] = $value * $value;
    }
    return $arr1;
}

function sqv_3($array)
{
    $arr2 = [];
    for ($i = 0; $i < count($array); $i++) {
        $arr2 = $array[$i] * $array[$i];
    }
    return $arr2;
}
function sqv4($my_array)
{
    $arr3 = [];
    $i = 0;
    while ($i < count($my_array)) {
        $arr3[] = $my_array[$i] * $my_array[$i];
        $i++;
    }
    return $arr3;
}


echo speed_test("sqv", $my_array) . "<br>";
echo speed_test("sqv_2", $my_array) . "<br>";
echo speed_test("sqv_3", $my_array) . "<br>";
echo speed_test("sqv_3", $my_array);
?>
</pre>