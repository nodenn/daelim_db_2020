<?php

function daelim()
{
    print __FUNCTION__ . "호출합니다. <br>";
    echo "대림대학교";
}

function myname()
{
    print __FUNCTION__ . "호출합니다. <br>";
    echo "김우섭 입니다.";
}

$caller = "myname";
$caller();

$func = function ()
{
    echo "오늘도 좋은 하루 되세용가리";
};

$func();