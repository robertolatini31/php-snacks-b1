<!-- ## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti 
in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-6</title>
</head>
<body>

<?php foreach($db as $key => $people) :?>
    <h2>
        <?php echo $key ?>
    </h2>
    
    <?php foreach($people as $single) : ?>
        <p style="<?php echo($key == 'teachers' ? 'background-color:gray' : 'background-color:green') ?>">
            <?php echo $single['name'] . ' ' . $single['lastname'] ?>
        </p>
    <?php endforeach; ?>
<?php endforeach; ?>
</body>
</html>