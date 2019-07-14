<?php

   class Animals {
    
        private $family;
        private $food;

        public function getFamily(){
            return $this->family;
        }
        public function setFamily($family){
            $this->family = $family;
        }

        public function getFood(){
            return $this->food;
        }
        public function setFood($food){
            $this->food = $food;
        }

    }