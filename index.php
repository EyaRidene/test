<?php $name='eya';
for($i=0;$i<5;$i++)
{
    $ism="eya $i";
    echo "$ism <br>";
}
echo 'bonjour '.$name.'<br>';
/*$globalVar1 = 1;
$globalVar2 = 2;
function somme() {
    global $globalVar1, $globalVar2;
    $globalVar2 = $globalVar1 + $globalVar2;
}
somme();
echo $globalVar2;*/
$globalVar1 = 1;
$globalVar2 = 2;
function somme() {
    $GLOBALS['globalVar2'] =
        $GLOBALS['globalVar1'] +
        $GLOBALS['globalVar2'];
}
somme();
echo $globalVar2.'<br>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <title>Title</title>
</head>
<body>
bonjour <?php echo $name ?>
</body>
</html>

