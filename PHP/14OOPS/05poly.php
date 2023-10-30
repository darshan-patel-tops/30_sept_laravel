<?php 

class friend
{
    public function car()
    {
        echo "Alto<br>";
    }
    // public function car()
    // {
    //     echo "Alto<br>";
    // }

}

class friend2 extends friend
{
    public function car()
    {
        parent::car();
        echo "mercedeas<br>";
        // self::car();
    }
}


$lalchi_dost = new friend2;
// $lalchi_dost = new friend;
$lalchi_dost->car();




?>