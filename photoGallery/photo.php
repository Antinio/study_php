<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 22.09.2016
 * Time: 21:30
 */

$id = $_GET['id']; //Считываем передаваемый параметр

?>

<html>
    <head>
        <title>Просмотр картинки №<?php echo $id;?></title>
    </head>
    <body>
        <img src="img/<?php echo $id;?>.jpg" width="500" alt="img in this place">
        <h2>Здесь должно быть описание картинки</h2>
    </body>
</html>
