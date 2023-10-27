<?php

//2 types of function
    //  1 system defined
    // with parameter
    // without parameter
    //  2 user defined 
    // with parameter
    // without parameter

function demo()
{
    echo "Welcome<br>";
}


demo();
demo();
demo();
demo();
demo();
demo();

function call()
    {
        echo "Call<br>";
    }
    call();



function add($a,$b)
{
    echo $a-$b;
}

$x = 56;
$y = 12;

echo "<br>";
add(50,10);
echo "<br>";
add($x,$y);
echo "<br>";
add(500.56,10.599);
echo "<br>";









?>