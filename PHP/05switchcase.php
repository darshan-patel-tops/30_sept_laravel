<?php



//Major difference is case sensitive and scope is very low

$variable = "Admin";


switch ($variable)   // condition
{
    case 'Admin':   //case
        echo "Success";
        break;

    case 'User':   //case
        echo "Fail";
        break;
    
    default:
    echo "fail";
        break;
}











?>