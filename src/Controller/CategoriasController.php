<?php


namespace App\Controller;


use App\Model\DAO\CategoriaDAO;

class CategoriasController
{
    public static function index() {
        $categoriaDAO = new CategoriaDAO();
        $resultado = $categoriaDAO->consultar();
        require '../src/View/Categorias/index.php';
    }
}