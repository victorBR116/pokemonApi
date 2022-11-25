<?php

function api(){
  //
    $url = "https://www.canalti.com.br/api/pokemons.json";
     $pokemons = json_decode(file_get_contents($url));

     foreach($pokemons->pokemon as $linha => $postagem){
        var_dump(sprintf("<br>id:%s", $postagem->id)); 
        var_dump(sprintf("<br>nome: %s", $postagem->name));
        var_dump(sprintf('<br><img src="%s"/><hr>', $postagem->img));
      

      if($linha == 9){
        exit();
      }
    }
} 

$resultado = api();
return $resultado;