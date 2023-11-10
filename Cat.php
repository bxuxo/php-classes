<?php

class Cat {
    public $name;
    private $age = 0;

    function __construct($name) {
        $this->name = $name;
    }

    function birthday( ) {
        $this->age++;
    }

    static function meow( ) {
        echo "MEOW MEOOOOOOOOOOOOOOOW!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
    }
}

?>