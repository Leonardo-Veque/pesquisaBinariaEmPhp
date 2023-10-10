<?php


function pesquisa_binaria($lista=[], $item){
    $baixo = 0;
    $alto = count($lista)-1;
    while ($baixo <= $alto){
        $meio = (int)( ($baixo + $alto) / 2);
        $chute = $lista[$meio];
        
        if($chute == $item){
            return $meio + 1;
        }
        if($chute > $item){
            $alto = $meio - 1;
        }
        else{
            $baixo = $meio + 1;
        }
        }
    return NULL;

   

}

$minha_lista = [1,2,3,4,5,6,7,8,9];
       
$resultado = pesquisa_binaria($minha_lista,9);


if($resultado == null){
    echo "Digite o numero";
}
else{
    echo "$resultado";
} 



