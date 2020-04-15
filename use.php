<?php
//замыкание
$msg = "Hello";

$test = function()use($msg){//use захватила в том виде в котором она былы до создания ананимной ф-ции)
    echo $msg;
};

$msg="bye";
$test();
?>