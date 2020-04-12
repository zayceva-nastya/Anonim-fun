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

$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);

$a2 = array_filter($a1, function ($x) {
    return $x >= 0;
}); //запишет то что TRUE
// print_r($a2);

function filter_test($arr)
{
    $arr_new = [];
    foreach ($arr as $key => $value) {
        if ($value >= 0) {
            $arr_new[] = $value;
        }
    }
    return $arr_new;
}
// print_r(filter_test($a1));

function filter_test2($arr)
{
    $arr_new2 = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] >= 0) {
            $arr_new2[] = $arr[$i];
        }
    }
    return $arr_new2;
}
// print_r(filter_test2($a1));


function filter_test3($arr)
{
    $arr_new3 = [];
    $i = 0;
    while ($i < count($arr)) {
        if ($arr[$i] >= 0) {
            $arr_new3[] = $arr[$i];
        }
        $i++;
    }
    return $arr_new3;
}
// print_r(filter_test3($a1));
echo speed_test("array_filter", $a1) . "<br>";
echo speed_test("filter_test", $a1) . "<br>";
echo speed_test("filter_test2", $a1) . "<br>";
echo speed_test("filter_test3", $a1);
?>