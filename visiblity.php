<?php


    # the public can i caught from outside the class
    # the protected Uncaught from outside the class but caught from sub class
    # the private Uncaught from outside the class and Uncaught from sub class 

    # can i caught form private and protected by use public methods
    # can i caught form private Methods and protected by use public methods

    class Test {
        public $name = 'Anas';
        protected $age = 19;
        private $id  = 2019;

        public function getName() : string{
           if($this->name){
            return $this->name;
           }else{
               return '<p> Not set name yet</p>';
           }
        }

        public function getAge() : float{
            if($this->age){
             return $this->age;
            }else{
                return 0;
            }
         }        

         public function getId() : int{
            if($this->id){
             return $this->id;
            }else{
                return 0;
            }
         }

         // this private function
         private function sayHello($name){
            echo ' Hello  ' . $name;
         }

         protected function sayBay(){
             echo '<p> Bay Users </p>';
         }

         // this function to call the private function
         public function call($name){
            $this->sayHello($name);
            $this->sayBay();
         }

    }


    $te = new Test();
    echo $te->getAge();
    echo $te->call('Anas');