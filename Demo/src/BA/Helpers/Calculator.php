<?php

namespace BA\Helpers;

class Calculator {
    private $_val1 , $_val2;

    public function __construct($val1, $val2){
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    /**
     * @assert () == 12
     */
    public function add(){
        return $this->_val1 + $this->_val2;
    }

    /**
     * @assert () == 8
     */
    public function subtract(){
        return $this->_val1 - $this->_val2;
    }

    /**
     * @assert () == 20
     */
    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    /**
     * @assert () == 5
     */
    public function divide () {
        return $this->_val1 / $this->_val2;
    }
}
