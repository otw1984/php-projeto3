<?php
require_once("Produto.php");
require_once("conexao.php");

$pesquisa = $_POST['pesquisa'];

$produto = new Produto($cnx);



?>

<div class="container">
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Produtos</h3>
        </div>
    </div>

    <!--### PRODUTOS ###-->
    <?php
    foreach($produto->pesquisa($pesquisa) as $p){
        ?>
        <div class="col text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">

                    <img src="<?php echo $p['img_produto']; ?>" alt="">

                    <div class="caption">
                        <h3><?php echo $p['nome']; ?></h3>

                        <p><?php echo $p['descricao']; ?></p>

                        <p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                            <a href="#" class="btn btn-default">Detalhes</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
