<?php
class MyClass {
    public $pub = 'Public';
    protected $pro = 'Protected';
    private $priv = 'Private';

    function printHello() {
        echo $this->pub."\n";
        echo $this->pro."\n";
        echo $this->priv."\n";
    }
}

$obj = new MyClass();
echo $obj->pub."\n"; //Works  
$obj->printHello(); //Shows Public, Protected and Private