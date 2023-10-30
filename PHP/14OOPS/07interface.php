<?php



interface pizzahut
{
    public function sqft();
    public function employee();
    public function saman();
    public function location();

}
// interface means 100% compulsory
class jaimin implements pizzahut
{
    public function sqft()
    {
        echo "1000<br>";
    }
    public function employee()
    {
        echo "10<br>";
    }
    public function saman()
    {
        echo "100<br>";
    }
    public function location()
    {
        echo "SG Highway<br>";
    }
}

// $shop = new pizzahut;
$shop = new jaimin;
$shop->employee();
$shop->sqft();
$shop->location();
$shop->saman();













?>