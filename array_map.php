<pre>
<?php
function speed_test($fun, $arg, $n=100000){
    $time1 = microtime(TRUE);

    for($i=0; $i<$n;$i++){
        $fun($arg);
    }
    $time2 = microtime(TRUE);

    return $time2 - $time1;
}

$a = array(1,2,3,4,5,6,7,8,9,10);
print_r($a1);

$a2 = array_map(function($x){return $x*$x;}, $a);//возводет в квадрат элементы $a1
print_r($a2);

$a3=[];
foreach($a as $value){
$a3[]= $value*$value;
}
print_r($a3);

$a6 = array(1,2,3,4,5,6,7,8,9,10);

function sqv($array){
   return array_map(function($x){return $x*$x;}, $array); 
}

function sqv_2($array){
 foreach($array as $value){
        $a3[]= $value*$value;
        }
        return $a3;
}

function sqv_3($array){
    $a7 = [];
    for($i=0;$i<count($array);$i++){
        $a7 = $array[$i]*$array[$i];
       
    } return $a7; 
}
echo speed_test("array_map",$a6)."<br>";
echo speed_test("sqv",$a6)."<br>";
echo speed_test("sqv_2",$a6)."<br>";
echo speed_test("sqv_3",$a6);
?>
</pre>