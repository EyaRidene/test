<?php
$chaine="bonjour Gl2 on fait php";
$stats=count_chars($chaine,1);
//var_dump($stats)
include "testfucntion.php";
echo somme(1,2,3,4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <title>Title</title>
</head>
<body>
<table class="table">
    <tr>
        <th> caractère </th>
        <th>nnbOccurence</th>
        <?php
        foreach ($stats as $car=>$nbOCC )
        {?>
    </tr>
    <tr>
        <td><?= chr($car) ?></td>
        <td><?= $nbOCC ?></td>
    </tr>
    <?php
    }
    ?>
</body>
</html>
