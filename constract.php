<?php

    # we can use __construct() or name class

    class My_Class1 {
        public $name ;
        public $age;
        
        public function __construct(){
            $this->name = 'anas';
            $this->age = '19';
        }
      public function getInfo(){
        echo 'This name is ' . $this->name;
      }
    
    }

    $class1= new My_Class1; #construct without
   echo $class1->getInfo();