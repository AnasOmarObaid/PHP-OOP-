<?php

    class Test 
    {
        public function a(){
            echo 'From A <br>';
            return $this;
        }
        public function b(){
            echo 'From B <br>';
            return $this;
        }
        public function c(){
            echo 'From C <br>';
            return $this;
        }
    }

    $test = new Test();
    
    $test->a()->b()->c();