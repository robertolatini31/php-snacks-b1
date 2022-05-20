<!-- ## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-4</title>
</head>
<body>
    
    <?php 
    $array = [];
    while (count($array) < 15) {
        $new_number = mt_rand(1, 100);
        if (!in_array($new_number)) {
            array_push($array, $new_number);
        }
    }
    var_dump($array);
    ?>

</body>
</html>