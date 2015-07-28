<?php

class Produto {
    private $db;
    private $id;
    private $nome;
    private $descricao;
    private $img_produto;

    //MÉTODO CONSTRUTOR
    public function __construct(\PDO $db){
        $this->db = $db;
    }

    //PESQUISA
    public function pesquisa($pesquisa){
        //$query = "SELECT * FROM produto WHERE nome LIKE '%{$pesquisa}%' OR descricao LIKE '%{$pesquisa}%'";
        //$stmt = $this->db->query($query);
        $query = "SELECT * FROM produto WHERE nome LIKE :pesquisa OR descricao LIKE :pesquisa";
        $stmt = $this->db->prepare($query);

        $pesquisa = '%'. $pesquisa .'%';

        $stmt->bindValue(":pesquisa", $pesquisa);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    //LISTAR
    public function listar(){
        $query = "SELECT * FROM produto";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO:: FETCH_ASSOC);
    }

    //GETTERS AND SETTERS
    public function getDb(){
        return $this->db;
    }

    public function setDb($db){
        return $this->db = $db;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        return $this->descricao = $descricao;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getImgProduto(){
        return $this->img_produto;
    }

    public function setImgProduto($img_produto){
        return $this->img_produto = $img_produto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }


} 