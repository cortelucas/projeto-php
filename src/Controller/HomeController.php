<?php


namespace App\Controller;


class HomeController
{
    public static function index(){
        require '../src/View/Home/index.php';
    }
}