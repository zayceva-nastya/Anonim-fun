<pre>
    <?php
    $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    print_r($a);

    array_walk($a, function(&$item, $key, $sp) {
        $item = "$key $sp $item";
    }, "=");
    print_r($a);
