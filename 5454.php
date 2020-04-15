<?php
$t = microtime(true);
$array = array_fill(0, 1000000, 'hello world');

array_walk($array, function(&$item){
    $item = 'hello!';
});

echo microtime(true) - $t;
echo '<br>';
echo memory_get_usage();
?>