<?php


    /*

        Blog System:
        
        class  = code to add new post, article, information
        object = post, article, information
        Application = Blog System

        const NameConstant = VALUE;
        * To Use The Constant On Our Class We Use self::NameConstant
        * To Use The Constant Out Class We Use NameClass::NameConstant
        * To Use The Constant Out Class We Use NameObject::NameConstant

        static name;
        * To Use The Static Out Class We Use NameClass::NameStatic
        * To Use The Static Out Class We Use NameObject::NameStatic

        final keyword
        * it use with the function and this function with final cant be override
        * it use with the class and this class with final cant extends withe another class

    */

    class Student {
        public $name; // var same as public
        private $age;
        protected $id = 0; // by default 0

        static $number; #this static
        
        const UNIVERSITY = 'Al-azhar'; # I use private and also can use public
      
        public function __construct($name, $age, $id)
        {
            $this->name = $name;
            $this->age = $age;
            $this->id = $id;
            
        }
      
        public function getUniversty(){
            return self::UNIVERSITY;  #use when i in class
        }
       
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setAge($age){
            $this->age = $age;
        }
        public function getAge(){
            return $this->age;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }

        public function printInformation(){
            echo 'the name of student is '. $this->name . '<br>' . 'The age of student is ' . $this->age . '<br>';
        }
        
    }

    $arrayStudent = array();

    /* Some Codes  */

    for($i = 0; $i < 3; ++$i){
    array_push($arrayStudent, new Student('Anas', 19, 2019));

    }

    echo "<pre>";
    print_r($arrayStudent);
    echo '</pre>';

    echo $arrayStudent[0]->printInformation();
    $arrayStudent[1]->setId(2010);
    echo $arrayStudent[1]->getId();

    echo STUDENT::UNIVERSITY; #use when i out class
    $arrayStudent[1]::$number = 9;
    echo $arrayStudent[1]::$number;