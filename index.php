<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades Web2</title>
</head>
<body>
    <?php


echo "<h4>Exercicio 1</h4>";
echo "<br>";
$valor1 = 12;
$valor2 = 30;
$resp = $valor1 + $valor2;
echo $resp;



echo "<hr>";


echo "<h4>Exercicio 2</h4>";
echo "<br>";
$media1 = 8;
$media2 = 5;
$media3 = 6;
$mediaResp = ($media1 + $media2 + $media3) / 3;
echo number_format ($mediaResp, 2, ',',',');



echo "<hr>";


echo "<h4>Exercicio 3</h4>";
echo "<br>";
$metros = 5;
$cm = $metros * 100;
echo $cm. "cm";



echo "<hr>";


echo "<h4>Exercicio 4</h4>";
echo "<br>";
$base = 5;
$altura = 10;
$areaTriangulo = ($base * $altura) / 2;
echo $areaTriangulo;



echo "<hr>";


echo "<h4>Exercicio 5</h4>";
echo "<br>";
$numero1 = 5;
$resultadoCheck = "";

if($numero1 == 0){
    $resultadoCheck = "0";
}else if($numero1 > 0){
     $resultadoCheck = "positivo";
}else{
     $resultadoCheck = "negativo";
}
echo $resultadoCheck;



echo "<hr>";


echo "<h4>Exercicio 6</h4>";
echo "<br>";
$idade = 18;
$resultadoIdade = "";

if($idade >= 18){
    $resultadoIdade = "Maior de idade";
} else{
    $resultadoIdade = "Menor de idade";
}
echo $resultadoIdade;



echo "<hr>";


echo "<h4>Exercicio 7</h4>";
echo "<br>";
$media = 6;
$resultadoMedia = "";

if($media >= 6){
    $resultadoMedia = "Aprovado";
}else{
    $resultadoMedia = "Reprovado";
}
echo $resultadoMedia;



echo "<hr>";


echo "<h4>Exercicio 8</h4>";
echo "<br>";
$valorNumero1 = 7;
$valorNumero2 = 5;
$resultadoNumero = "";

if($valorNumero1 > $valorNumero2){
    $resultadoNumero = "Valor 1 é maior";
}else if($valorNumero2 > $valorNumero1){
    $resultadoNumero = "Valor 2 é maior";
}else{
    $resultadoNumero = "Os valores são iguais";
}
echo $resultadoNumero;



echo "<hr>";


echo "<h4>Exercicio 9</h4>";
echo "<br>";
$diaNumero = 5; 
$nomeDia = "";

switch ($diaNumero) {
    case 1:
        $nomeDia = "Domingo";
        break;
    case 2:
        $nomeDia = "Segunda-feira";
        break;
    case 3:
        $nomeDia = "Terça-feira";
        break;
    case 4:
        $nomeDia = "Quarta-feira";
        break;
    case 5:
        $nomeDia = "Quinta-feira";
        break;
    case 6:
        $nomeDia = "Sexta-feira";
        break;
    case 7:
        $nomeDia = "Sábado";
        break;
    default:
        $nomeDia = "Número inválido! Digite um valor entre 1 e 7.";
        break;
}

echo "Dia da semana: $nomeDia";



echo "<hr>";


echo "<h4>Exercicio 10</h4>";
echo "<br>";
$letra = 'a'; 


$letra = strtolower($letra);

switch ($letra) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "A letra '$letra' é uma vogal.";
        break;

    default:
        
        if (ctype_alpha($letra)) {
            echo "A letra '$letra' é uma consoante.";
        } else {
            echo "'$letra' não é uma letra válida.";
        }
        break;
}



echo "<hr>";


echo "<h4>Exercicio 11</h4>";
echo "<br>";
$status = "aguardando"; 

switch ($status) {
    case "aguardando":
        echo "Seu pedido está aguardando confirmação.";
        break;

    case "em_preparacao":
        echo "Seu pedido está sendo preparado!";
        break;

    case "enviado":
        echo "Seu pedido foi enviado e está a caminho!";
        break;

    case "concluido":
        echo "Seu pedido foi entregue com sucesso!";
        break;

    default:
        echo "Status desconhecido. Por favor, entre em contato com o suporte.";
        break;
}



echo "<hr>";


echo "<h4>Exercicio 12</h4>";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}



echo "<hr>";


echo "<h4>Exercicio 13</h4>";
echo "<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}



echo "<hr>";


echo "<h4>Exercicio 14</h4>";
echo "<br>";
$numero = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}



echo "<hr>";


echo "<h4>Exercicio 15</h4>";
echo "<br>";
$contador = 10;

while ($contador >= 1) {
    echo $contador . "<br>";
    $contador--; 
}



echo "<hr>";


echo "<h4>Exercicio 16</h4>";
echo "<br>";
$i = 1;
$soma = 0;

while ($i <= 100) {
    $soma += $i; 
    $i++;        
}

echo "A soma dos números de 1 a 100 é: $soma";



echo "<hr>";


echo "<h4>Exercicio 17</h4>";
echo "<br>";
$tentativas = 0;

do {
    $numero = rand(1, 10); 
    $tentativas++; 
    echo "Tentativa $tentativas: número sorteado = $numero<br>";
} while ($numero != 5);

echo "<br> O número 5 foi sorteado após $tentativas tentativas!";



echo "<hr>";


echo "<h4>Exercicio 18</h4>";
echo "<br>";
$frutas = array("Banana", "Maçã", "Morango", "Manga", "Maracuja");

echo "<ul>"; 

foreach ($frutas as $item) {
    echo "<li>$item</li>"; 
}

echo "</ul>"; 



echo "<hr>";


echo "<h4>Exercicio 19</h4>";
echo "<br>";
$numeros = array(3, 7, 8, 2, 9);

$soma = array_sum($numeros);

echo "A soma dos números é: $soma";



echo "<hr>";


echo "<h4>Exercicio 20</h4>";
echo "<br>";
$aluno = array(
    "nome" => "João Silva",
    "idade" => 20,
    "curso" => "Engenharia de Software"
);

echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"];



echo "<hr>";




?>

</body>
</html>
<?php

