<?php

function formatNumber($numero){
    if(strlen($numero) == 10){
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, '9', 3, 0);
        $novo = substr_replace($novo, ')', 3, 0);
        $novo = substr_replace($novo, '-', 9, 0);
    }else{
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, ')', 3, 0);
        $novo = substr_replace($novo, '-', 9, 0);
    }
    return $novo;
}

function formatCpf($cpf)
{
  $cpf = substr_replace($cpf, '.', 3, 0);
  $cpf = substr_replace($cpf, '.', 7, 0);
  $cpf = substr_replace($cpf, '-', 11, 0);

  return $cpf;
}
