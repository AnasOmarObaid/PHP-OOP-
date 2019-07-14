<?php

    # when i call method not exist that will be error
    # when i call method private or protected that will be error

    #when the variable is not exist and i will to print it that will be error so i use __get to hide the error
    #when the variable is private and i will to print it that will be error so i use __get

    class My_Class {
        protected $name;

        private function sayHi(){
            echo 'Hi User';
        }

        public function __call($name, $arguments)
        {
            echo 'The Method Name' . '[ ' . $name .' ] ' . 'Dos Not Exsit OR not Allod' ;
      
        }

        public function __get($nameError){
            echo  '<br>' . 'Error ' . $nameError . ' Not Found';
        }

    }

    class My_Class2 extends My_Class {
        private $color;

        public function __set($name, $value)
        {
            echo '<br> The ' . $name . ' Is private OR Not exist' . ' The Value is ' . $value . '<br>';
        }
    }

    $test = new My_Class2(); 
    $test->sayHi(); #the function is private not allow to use it in sub class
    echo $test->age; #the name is private not allow to use it

    $test->age = 4; #i sent to x = 4 and the x not exist in my class, so he will create x in my class
    $test->color = 'red';
