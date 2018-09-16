<?php

require_once('pergaminho.php');


$preposicoes = new Pergaminho;
echo '========RESPOSTA========</br>';
echo $preposicoes->preposicoes() . '<br/>';

$verbos = new Pergaminho;
echo '</br>';
echo '========RESPOSTA========</br>';
echo $verbos->verbos()  . '<br/>';

$ordem = new Pergaminho;
echo '</br>';
echo '========RESPOSTA========</br>';
echo $ordem->ordem();
