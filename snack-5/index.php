<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$long_string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quidem molestias necessitatibus, blanditiis aliquid nemo. Ipsa alias incidunt, rem delectus numquam nam quo? Dicta, atque. Ipsum, corporis laborum reprehenderit ipsam placeat excepturi expedita iure officia dolorem debitis possimus maxime temporibus? Quibusdam similique optio, sed quo amet commodi est, dolor alias velit earum rerum libero corrupti culpa eaque at animi consequatur maxime saepe omnis asperiores error blanditiis, dicta ex. Asperiores ipsam aspernatur ipsa minima, quis earum nesciunt voluptatem, neque error sequi accusamus nulla. Rerum nulla minima magni dolor delectus asperiores mollitia reiciendis deleniti qui sequi vel aliquam ab obcaecati minus rem beatae sunt atque vero temporibus, eaque voluptas reprehenderit quae eum accusamus. Deserunt, esse! Aliquid, reprehenderit? Temporibus quibusdam a sint vero dolorem rem libero repellat odio fugiat culpa, cumque ex minima consequuntur inventore laborum ut? Laborum laboriosam nam molestiae autem et odio ullam, neque ducimus accusantium tempore quis laudantium commodi fuga dolores explicabo error nemo at corrupti perferendis totam, animi repellat nulla dolore sed. Fugit neque nemo soluta consectetur quasi provident at magni, accusantium perspiciatis voluptate inventore saepe odio hic rem optio sit minus, modi culpa. Reprehenderit perspiciatis harum, repellendus odit officiis non eius tenetur unde perferendis impedit, inventore eum libero asperiores quibusdam provident exercitationem dolorem quidem sint? Accusantium laudantium corrupti, inventore, similique distinctio quia alias tempore quisquam repudiandae minus quas voluptas a ratione dolorem quae nam dolorum ab consequuntur voluptatem enim? Dolorem similique quia deserunt ut sint nulla, labore nisi esse reprehenderit debitis vel, sed adipisci maiores mollitia? Nulla fugiat praesentium neque quia, culpa commodi deleniti, laborum provident autem ab magni harum iure rerum. Tenetur nulla quam nesciunt id maxime, hic eum esse sit, corporis aut nihil libero non dolor asperiores aspernatur sunt alias reiciendis vel inventore quis dolore nisi eius. Eaque nulla tempore fugit soluta enim molestiae? Autem, consequatur.';

$array_p = explode('.', $long_string);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-5</title>
</head>
<body>
    

<?php foreach($array_p as $parag) :?>
    <p>
        <?php echo $parag ?>.
    </p>
<?php endforeach ?>
</body>
</html>