<?php




$marks = 56;
// printf($marks);

if($marks>0)
{

    if($marks>=0 && $marks<=33)
    {
        echo "fail";
    }
    else if($marks>=34 && $marks<=50)
    {
        echo "pass";
    }
    else if($marks>=51 && $marks<=70)
    {
        echo "first class";
    }
    else if($marks>71)
    {
        echo "bahot jyada";
    }
    // echo "inside if";
}
else
{
    // echo "inside else";
}












?>