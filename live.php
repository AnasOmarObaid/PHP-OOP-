<?php

    include_once('cow.php');
    $cow = new Cow();
    $cow->setFood('food cow');
    echo $cow->getFood();