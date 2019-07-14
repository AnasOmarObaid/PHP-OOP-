<?php

    class Original {

        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function getInformation(){
            echo 'The Name Is ' . $this->name . ' The Age Is ' . $this->age;
        }
        public function __clone()
        {
            $this->name = clone $this->name;
            $this->age = clone $this->age;
        }
    }

    $original = new Original('Anas', 20);
    echo '<pre>';
    print_r($original);
    echo '</pre>';

    $clone = clone $original; #copy the object and if i change any object that will effect the other one
    $clone->name = 'Ahmad'; 
    echo '<pre>';
    print_r($clone);
    echo '</pre>';