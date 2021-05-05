<?php


namespace App\Model\DAO;


class DAO
{
    private $conexao;

    /**
     * @return mixed
     */
    public function __contruct()
    {
        $conexao = new PDO("mysql:host=localhost; dbname=projeto-php", "root", "0612AnLu+");
    }

    /**
     * @return mixed
     */
    public function getConexao()
    {
        return $this->conexao;
    }
}