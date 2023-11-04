<!-- 
__construct(),
__destruct(),
__call(),
__callStatic(),
__get(),
__set(),
__isset(),
__unset(),
__sleep(),
__wakeup(),
__serialize(),
__unserialize(),
__toString(),
__invoke(),
__set_state(),
__clone(),
__debugInfo().
 -->

<?php 

class MagicMethods
{
    public $name = "vaibhavi";
    public function fun()
    {
        echo "Called Function";
    }
    public function __get($var)
    {
            echo $var;
    }
    public function __set($var,$val)
    {
        echo "variable name is $var and value name is $val"; 
    }
    function __call($var,$val)
    {
         print_r($var);
        echo "<br>";
        print_r($val);
    }
}


$obj =  new MagicMethods;
echo "<br>";
$obj->fun();
echo "<br>";
echo $obj->name;
echo "<br>";
echo $obj->name1;
echo "<br>";
echo $obj->kuchbhi;
echo "<br>";
echo $obj->ahmedabad;
echo "<br>";
 $obj->name10=" jaimin ";
echo "<br>";
 $obj->newname=" fazil bhai ";
echo "<br>";
 $obj->oldname=" bhupendra jogi ";
echo "<br>";
 $obj->city=" rajkot ";
echo "<br>";
 $obj->city=" bhopal ";
echo "<br>";
 $obj->city("name","city","age","salary");


