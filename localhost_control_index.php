<?php
require_once  '../function/fun.php';

msc();
newsAll();

foreach (newsall() as $value)
    {
        echo "$value <br>";
    }




