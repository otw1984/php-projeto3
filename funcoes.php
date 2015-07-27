<?php

function paginas(){
  $vp = ['home', 'empresa', 'produtos', 'servicos', 'contato'];
  $rota = ltrim(filter_input(INPUT_SERVER, 'REQUEST_URI'), "/");


  if($rota == ""){
    $rota = "home";
  }

  if(!in_array($rota, $vp)  or !file_exists($rota . ".php")){
    http_response_code(404);
    return require_once("404.php");
  }

  return require_once $rota . ".php";
}

?>