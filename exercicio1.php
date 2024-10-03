<!DOCTYPE html>
<html>
<head>
    <title>Formulario </title>
</head>
<body>
    
    
     <?php 
        $numA=$_GET['numA'];
        $numB=$_GET['numB'];
        $numC=$_GET['numC'];
        $somaa=$numA+$numB;
        echo $somaa;
        if ($somaa < $numC){
        echo "Soma de A e B (". $Somaa. ") é menor que C(". $numC .")";        
        }
       
        ?>
         <form method="get">
            <label for="numA">num A </label>
            <input type="text" id="numA" name="numA">
            <label for="numB">num B </label>
            <input type="text" id="numB" name="numB">
            <label for="numC">num C </label>
            <input type="text" id="numC" name="numC">
            <input type="submit" value="calcular">
            
        
</body>
</html>

