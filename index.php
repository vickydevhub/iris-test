<?php
require_once __DIR__  . '/Helper/Helper.php';
use Helper\Helper;
if(isset($_GET['method']) && $_GET['method']=="ltn")
{
    try {
         //method check letter to Number
        echo Helper::letterToNumber('BA'); 
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
   
}
else
{
    try {
        //method check number to Letter
        echo Helper::numberToLetter(30);
    } catch (\Throwable $th) {
         echo $th->getMessage();
    } 
}