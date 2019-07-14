<?php

    # Cant Allow To Create Object From Trait AS abstract Class And Interface
    # Cant Allow To extends Trait And implement
    # Allow To Class Use More Than One 
    # Traits cannot have constants

    trait _Trait1{

        public function trait_1(){
            echo '<p>This One Trait</p>';
        }
        public $oneTrait;

        public function doSomething(){
            echo '<p>Do SomeThing From Trait 1</p>';
        }
    }

    trait _Trait2{

        public function trait_2(){
            echo '<p>This Tow Trait</p>';
        }

        public function doSomething(){
            echo '<p>Do SomeThing From Trait 2</p>';
        }
    }

    trait _Trait3{

        public function trait_3(){
            echo '<p>This Three Trait</p>';
        }
        public $towTrait = 'Three Trait';
    }

    class _Class1{
        
        use _Trait1, _Trait2 {
            _Trait1::doSomething as otherName;
            _Trait2::doSomething insteadOf  _Trait1;
        }
       
        public function trait_2(){
            echo '<p>This Form Class</p>'; #The Class Will Call This Method and Ignore The Method From Trait
        }

    }

    class _Class2 extends _Class1{

        public function __construct($oneTrait)
        {
            $this->oneTrait = $oneTrait;
        }
    }
    $class_1 = new _Class1();
   echo $class_1->otherName();