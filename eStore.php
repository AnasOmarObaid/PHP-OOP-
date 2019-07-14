<?php

    # Note Name File Is Manager.class.php And The Name Class Must Be Manager

    spl_autoload_register(function($class){
        
        if(file_exists('Class/SpecialClass/' . $class . '.class.php')){
            require 'Class/SpecialClass/' . $class . '.class.php';
        }
        
        if(file_exists('Class/' . $class . '.class.php')){
            require 'Class/' . $class . '.class.php';
        }
       
    });


    $product = new Product();
    $product->getProduct();

    $manager = new Manager();

    $ser = new Sec();
    $ser->Welcom();

    $pass = new Pass();
    $pass->getPass();
