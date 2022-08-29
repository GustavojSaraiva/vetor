<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vetor</h1>

    <?php
    $nome = ['mateus', 'marcos', 'lucas', 'joao'];
    $capitulos = [28, 16, 24, 21];

    echo'<table border = "2">';
    echo'<tr>';
    echo '<th>nome</th>';
    for($i=0; $i<4; $i++){
        
        echo "<td>$nome[$i]</td>";

        }
        echo '</tr>';

        //divisoria


        echo'<tr>';
        echo'<th>capitulo</th>';
    for($i=0; $i<4; $i++){
    
    echo "<td>$capitulos[$i]</td>";
    
    }
    echo '</tr>';
    echo '</table>';

    
   

   
   
    ?>


</body>
</html>