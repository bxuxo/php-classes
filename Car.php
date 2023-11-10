<?php

class Car {
    public $brand;

    function __construct($brand) {
        $this->brand = $brand;
    }

    public function make_noise( ) {
        echo "rrr rrrrrrrrr r!\n";
    }
}

?>