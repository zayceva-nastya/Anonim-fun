<pre>
<?php
$a1 = array(1,-2,3,4,-5,6,-7,-8,9,10);
print_r($a1);

$a2 = array_filter($a1, function($x){return $x>=0;});//запишет то что TRUE
print_r($a2);
?>