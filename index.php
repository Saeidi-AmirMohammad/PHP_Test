<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    for($i = 0; $i < 10; $i++){
        echo $list[$i] . " ";
        break;
    }

    foreach($list as $item){
        if( $item == 7) {continue;}
        echo $item . " ";
    }


    ?>
</body>

</html>