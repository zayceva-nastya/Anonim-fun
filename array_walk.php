<pre>
<pre>
    <?php
    function speed_test($fun, $arg, $arr, $n = 100000)
    {
        $time1 = microtime(TRUE);

        for ($i = 0; $i < $n; $i++) {
            $fun($arg);
        }
        for ($i = 0; $i < count($arr); $i++) {
            $fun($arr[$i]);
        }
        $time2 = microtime(TRUE);

        return $time2 - $time1;
    }

    $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    // print_r($a);


    array_walk($a, function ($item, $key) {
        echo "$key -> $item<br>";
    }); //как и foreach

    echo speed_test("array_walk", $a) . "<br>";
    //    function speed_test($fun, $arg, $n = 100000)
    // {
    //     $time1 = microtime(TRUE);
    
    //     for ($i = 0; $i < $n; $i++) {
    //         $fun($arg);
    //     }
    //     $time2 = microtime(TRUE);
    
    //     return $time2 - $time1;
    // };
    // $a = array(1,2,3,4,5,6,7,8,9,10);
    // print_r($a);
    // $b = [1,3,4,5,7,8];

    // array_walk($a, function($item,$key){echo "$key -> $item<br>";});//как и foreach
    // echo speed_test("array_walk", $b) . "<br>";
