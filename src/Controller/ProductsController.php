<?php


namespace App\Controller;


class ProductsController
{
    public static function index(){
        require '../src/View/Home/products.php';
    }
}