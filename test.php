<?php
$students= [
    'eya'=> 'ridene',
    'mariem'=>'ksontini'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">
    <title>Title</title>
</head>
<body>
<table class="table">
    <tr>
        <td> firstname</td>
        <th>name</th>
        <?php
        foreach ($students as $firstname=>$name )
        {?>
            </tr>
    <tr>
        <td><?= $firstname ?></td>
        <td><?= $name ?></td>
    </tr>
    <?php
        }
        ?>

</table>
</body>
</html>