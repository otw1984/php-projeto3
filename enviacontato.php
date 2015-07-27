<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--### As meta tags a seguir deve ser a primeiras no head, quaisquer mudanças implicam no funcionamento ###--> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      
  <!--### TITULO DA PÁGINA ###-->
  <title>PHP - Projeto 1</title>

  <!-- FOLHA DE ESTILOS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/stick-footer.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!--### HEADER ###-->    
<?php
  require_once("header.php")
?>


<!--### CONTEÚDO ###-->
<div class="container">
<h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h4>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

echo "NOME: {$nome} <br /> EMAIL: {$email} <br /> ASSUNTO: {$assunto} <br /> MENSAGEM:<br />{$mensagem} <br />";
?>



</div>




<!--### FOOTER ###-->
<?php
  require_once("footer.php")
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>