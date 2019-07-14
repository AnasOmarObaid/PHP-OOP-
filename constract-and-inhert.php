<?php

    class Person
    {
        public $name;
        public $age;
        private $id; #this is private so i will made set and get and not put it in construct
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() : string{
            return $this->name;
        }
        public function setName(string $name){
            $this->name = $name;
        }

        public function getAge() : float{
            return $this->age;
        }
        public function setAge(float $age){
            $this->age = $age;
        }

        public function getId() : int{
            return $this->id;
        }
        public function setId(int $id){
            $this->id = $id;
        }

        public function getInformation(){
            echo ' The Name Is ' . $this->name . ' The Age Is ' . $this->age . ' The Id Is '. $this->getId();
        }
    }

    class Teacher extends Person
    {
        public $school;
        private $id;
        public function __construct($name, $age, $school, $id)
        {
            parent::__construct($name,$age); #to call the construct from the parent
            $this->school = $school;
            $this->id = $id;
        }

        public function getId() : int{
            return $this->id;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        
        public function getInformation(){
            echo ' The Name Is ' . $this->name . ' The Age Is ' . $this->age . 'The School Is ' . $this->school  . ' The Id Is '. $this->getId();
        }
    }

    $person = new Person('Anas', 20);
    $person->setId(20101);
    echo $person->getInformation();
    
    echo '<br>';

    $te = new Teacher('Ahmed', 40, 'A', 3);
    echo $te->getInformation();