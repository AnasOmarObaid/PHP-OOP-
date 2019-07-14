<?php

    include_once('animals.php');

    class cow extends Animals {

        public $owner;

        public function getOwner(){
            return $this->owner;
        }
        public function setOwner($owner){
            $this->owner = $owner;
        }


    }