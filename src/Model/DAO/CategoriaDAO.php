<?php


namespace App\Model\DAO;


use App\Model\Domain\Categoria;

class CategoriaDAO
{
    private DAO $dao;

    public function __contruct()
    {
        $this->dao = new DAO();
    }

    private function antiInjection($attr, $html = true)
    {
        // remove palavras que contenham sintaxe sql
        $attr = preg_replace(strtolower("/(from|select|insert|delete|where|drop table|show tables|\|--|\\\\)/"), "", $attr);
        if (!is_array($attr)) {
            $attr = trim($attr);//limpa espaços vazio
            $attr = strip_tags($attr);//tira tags html e php
            $attr = addslashes($attr);//Adiciona barras invertidas a uma string
            // if($html == true)
            // $attr = htmlentities($attr,ENT_NOQUOTES,'ISO-8859-1',false);
        }
        return $attr;
    }

    public function inserir(Categoria $categoria)
    {
        try {
            $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":descricao", $this->antiInjection($categoria->getDescricao()));
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function alterar(Categoria $categoria)
    {
    }

    public function excluir(int $id)
    {
    }

    public function consultar()
    {
    }

    public function consultarPorID(int $id)
    {
    }
}