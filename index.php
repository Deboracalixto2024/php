<h2>exercicio 1</h2>

<?php

$matrizArray = [[3,2,1],[1,2,3],[3,2,1]];
$somaTotal = 0;
foreach($matrizArray as $linha){
    foreach($linha as $valor){
        $somaTotal+= $valor;

    }
}
echo "A soma se todos os valores da matriz é ".$somaTotal;
?>

<h2> exercicio 2</h2>

<?php 
echo '<p>Pedro Esta com sono<p>';
$texto ='<p> Abner tambem esta com sono<p>';
?>
<?=$Texto ?>

<h2> exercicio 3 </h2>
<?php 
$diferente = (10!=5);
if($diferente){
    echo "entrou no if";
} else  {
    echo "entrou no else";
}
var_dump ($diferente)

?>
<h2> exercicio 4 </h2>

<?php 
$diferente = (10 !=10);
$infopost = [
    "titulo"=> "Alunos passam no Processo Seletivo",
    "autor"=> "caique, o ++",
];


$titulopost= $infopost['titulo'] != ""? $infopost['titulo']: "sem titulo";
$autorpost = $infopost['autor']!=""? $infopost['autor']: "desconhecido";
echo $titulo;
?>

<div class="post">
    <h2> <?= $titulopost ?> </h2>
    <span> Escrito por: <?= $autorpost ?> </span>
</div>



<?php 
echo '<p>Pedro Esta com sono<p>';
$texto ='<p> Abner tambem esta com sono<p>';
?>
<?=$Texto ?>







<!DOCTYPE html>
<html>
<head>
    <title>Formulario </title>
</head>
<body>
    <label for="numA">Digite o valor de A:</label>
    <input type="number" id="numA"><br>
    <label for="numB">Digite o valor de B:</label>
    <input type="number" id="numB"><br>
    <label for="numC">Digite o valor de C:</label>
    <input type="number" id="numC"><br>
    
    <input type="submit" value= "Enviar">
    <p id="resultado"></p>
    <?php 
        $numA=$_GET['numA'];
        $numB=$_GET['num B'];
        $numA=$_GET['num C'];
        $somaValores=$numA+$numB;
        echo $somanumeros;
        if ($somanumeros<$numerosC){
            echo "Soma de A e B (". $Somavalores.") é menor que C(". $numC .")";        
        }
        
    ?>

    <script>
        function calcular() {
            
            // Obtém os valores dos inputs
            let a = parseFloat(document.getElementById("A").value);
            let b = parseFloat(document.getElementById("B").value);
            let c = parseFloat(document.getElementById("C").value);
            
            

            // Calcula a soma
            let soma = a + b;

            // Compara a soma com C e mostra o resultado
            let resultadoElement = document.getElementById("resultado");
            if (soma < c) {
                resultadoElement.textContent = `A soma de A e B (${soma}) é menor que C (${c}).`;
            } else {
                resultadoElement.textContent = `A soma de A e B (${soma}) não é menor que C (${c}).`;
            } 
                
    
        }
    </script>
</body>
</html>

