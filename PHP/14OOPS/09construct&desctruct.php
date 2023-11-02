<!-- The following method names are considered magical: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo(). -->
 

<?php




class bua
{
    public function gift()
    {
        echo "<br>gift<br>";
    }
    public function __destruct()
    {
        echo "<br>Chala gaya";
    }
    public function __construct()
    {
        echo "Bua ka ladka";
    }

}

$obj = new bua;
$obj->gift();
$obj->gift();
$obj->gift();
$obj->gift();
$obj->gift();
$obj->gift();
// construct is invoked by default when object is created
// destruct is called at last













?>