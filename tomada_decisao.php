<?php

$numero = 12;

// OPCÇÃO UTILIZANDO HIFEN E ELSE
if ($numero == 1) {
    echo "Janeiro";
} elseif ($numero == 2) {
    echo "Fevereiro";
} elseif ($numero == 2) {
    echo "Fevereiro";
} elseif ($numero == 2) {
    echo "Março";
} elseif ($numero == 2) {
    echo "Abril";
} elseif ($numero == 2) {
    echo "Maio";
} elseif ($numero == 2) {
    echo "Junho";
} elseif ($numero == 2) {
    echo "Julho";
} elseif ($numero == 2) {
    echo "Agosto";
} elseif ($numero == 2) {
    echo "Setembro";
} elseif ($numero == 2) {
    echo "Outubro";
} elseif ($numero == 2) {
    echo "Novembro";
} elseif ($numero == 2) {
    echo "Dezembro";
} else {
    echo "Mês não reconhecido";
}

echo "<br><br>";

switch ($numero) {
    case 1:
        echo "Janeiro";
        break;
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Mês não reconhecido";
        break;
}
