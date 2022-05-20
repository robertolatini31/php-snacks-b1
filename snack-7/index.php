<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->


<?php

$class = [
    [
        name => 'mario',
        surname => 'rossi',
        votes => [6, 5, 7, 8, 3],
    ],
    [
        name => 'giulia',
        surname => 'verdi',
        votes => [4, 8, 6, 5, 9],
    ],
    [
        name => 'vincenzo',
        surname => 'boldi',
        votes => [6, 6, 7, 6, 5],
    ],
    [
        name => 'sara',
        surname => 'tomson',
        votes => [8, 8, 9, 7, 6],
    ],
];


//var_dump(count($class[0]['votes']));
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-7</title>
</head>
<body>
    
    <?php for($i = 0; $i < count($class); $i++) { ?>
        <h2>
            <?php 
                echo(ucfirst($class[$i]['name'])), (' ') ,(ucfirst($class[$i]['surname'])); 
            ?>
        </h2>
        <?php 
            $media_votes = 0;
            for($j = 0; $j < count($class[$i]['votes']); $j++) {
                $media_votes += $class[$i]['votes'][$j];
            }
        ?>
        <h3>
            Media voti: <?php echo $media_votes / count($class[$i]['votes']); ?>
        </h3>

    <?php } ?>
</body>
</html>