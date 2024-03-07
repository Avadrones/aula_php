<?php

// Utilizar $ para criar variaveis 
 $nome = "Caetano";
 $escola = 'Senac Taubaté';
 $turno = 'noite';

echo "<h1> Olá Mundo! <h1>";
// Usando aspas duplas, não é necessario concatenar string com variavel                            
echo "<h3>$nome: Seja bem-vindo !<h3>";
// Usando áspas simples, é necessário concatenar string e variável
// Utilizando"ponto final".
echo 'Você está matriculado no ' .$escola .', no turno da' . $turno;