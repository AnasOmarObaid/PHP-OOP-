<?php

    abstract class Books {  // this class containes all method that shared withe all class
        public $logical;
        public $price;
        abstract public function setLogical($logical);
        abstract public function getLogical();
        abstract public function doSomething();
        
    }

    class algo extends Books {
       
       // override the function

       public function setLogical($logical)
       {
           $this->logical = $logical;
       }

        public function getLogical()
        {
            return $this->logical ;
        }

        public function doSomething()
        {
            echo ' Hi Im In Algo ';
        }

        public function __construct($price) // com from abstract class
        {
            $this->price = $price;
        }
    }

    class calc extends Books {
        
        // override the function

        public function setLogical($logical)
       {
           $this->logical = $logical;
       }

        public function getLogical()
        {
            return $this->logical ;
        }

        public function doSomething()
        {
            echo ' Hi Im In Calc ';
        }

        public function __construct($price) // com from abstract class
        {
            $this->price = $price;
        }

    }

    $abs = new algo(20);
    $abs->setLogical('algo Logical');
    echo $abs->getLogical() . '<br>';
    echo $abs->doSomething();
    echo '<br>' . $abs->price;

    echo '<br>';

    $cal = new calc(30);
    $cal->setLogical('calc Logical');
    echo $cal->getLogical() . '<br>';
    echo $cal->doSomething();
    echo '<br>' . $cal->price;