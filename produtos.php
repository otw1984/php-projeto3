<?php
require_once("conexao.php");
require_once("Produto.php");

$produto = new Produto($cnx);

foreach($produto->listar() as $p){
    echo $p['nome'];
}
?>

    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Produtos</h3>
            </div>
        </div>

        <!--### PRODUTOS ###-->
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="imagem" alt="">

                    <div class="caption">
                        <h3>Produto 1</h3>

                        <p>fasdfasdfasd</p>

                        <p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                            <a href="#" class="btn btn-default">Detalhes</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
