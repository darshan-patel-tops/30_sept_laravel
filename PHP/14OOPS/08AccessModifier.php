<?php  






class class1
{
    // public it is like water
    // protected it is like juice
    // private it is like black water/grape water
    
    public function water()
    {
        echo "Water<br>";
        // this keyword is used to point to variable or object of same of inherited class
        // $this->juice();
        $this->blackwater();
    }
    protected function juice()
    {
        echo "Juice<br>";
        // $this->blackwater();
        // $this->water();
    }
    private function blackwater()
    {
        echo "Black Water<br>";
    }
}

class class2 extends class1
{
    public function newwater()
    {
        echo "New Water<br>";
        $this->water();
        $this->juice();
        // $this->blackwater();
    }
}



$object =  new class2;
$object->newwater();
// $object->juice();
// $object->blackwater();




