<?php



class petrolcar
{
    public function tyre()
    {
        echo "Tyre<br>";
    }
    public function sterring()
    {
        echo "sterring<br>";
    }
    public function engine()
    {
        echo "engine<br>";
    }
    public function body()
    {
        echo "body<br>";
    }
    public function interior()
    {
        echo "interior<br>";
    }
}

class evcar extends petrolcar
{
    public function battery()
    {
        echo "Battery<br>";
    }
}



$car =  new evcar;
$car->battery();
$car->engine();
$car->body();
$car->interior();









?>