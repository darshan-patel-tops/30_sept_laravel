<?php







abstract class rbi
{
    public function secret()
    {
        echo "Secret<br>";
    }
    abstract function interest();
    //abstract function cannot contain body
}

class hdfc extends rbi
{
    public function account()
    {
        echo "Account<br>";
    }
    //you must implement the abstract function in child class
    public function interest()
    {
        echo "150 Rupya Dega<br>";
    }
}

//you cannot create object for abstract class
// $obj = new rbi;
$obj = new hdfc;
$obj->account();
$obj->interest();









?>