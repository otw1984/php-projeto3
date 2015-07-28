<?php

try{
    $cnx = new \PDO("mysql: host=localhost; dbname=projetophpce", "root", "otw1984");
}catch (PDOException $e){
    die("A conexão não pode ser estabelecida: ". $e->getCode(). "<br />". $e->getMessage());
}