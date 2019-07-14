<?php

 interface Mobile {
    public function press() : string; #that mean the function will return string
    public function price() : float;  #that mean the function will return float
    public function owner() : string;
 }

 interface My_Interface{}


 class Iphone implements Mobile{
    
    public $owner;
    const PRICE = 240.5;

    public function __construct($owner)
    {
        $this->owner = $owner;
    }
    
    // override the abstract method
    public function press() : string {
        return '<p>this press return from Iphone</p>';
    }
    public function price() : float{
        return Iphone::PRICE;
    }
    public function owner(): string
    {
        return  $this->owner;
    }

 }


 class Sony implements Mobile{
    
    public $owner;
    const PRICE = 190.5;

    public function __construct($owner)
    {
        $this->owner = $owner;
    }
    
    // override the abstract method
    public function press() : string {
        return '<p>this press return from Sony</p>';
    }
    public function price() : float{
        return Sony::PRICE;
    }
    public function owner(): string
    {
        return  $this->owner;
    }

 }

 // this class will implements 2 interface

 class test implements Mobile, My_Interface{
  // override the abstract method
    public function press() : string {
        return '<p>this press return from Sony</p>';
    }
    public function price() : float{
        return Sony::PRICE;
    }
    public function owner(): string
    {
        return  $this->owner;
    }
 }


 

 $iphone = new Iphone('Anas');
 echo $iphone->owner(). '<br>';
 echo $iphone->price();
 echo $iphone->press();

 $sony = new Sony('Ahmad');
 echo $sony->owner(). '<br>';
 echo $sony->price();
 echo $sony->press();

