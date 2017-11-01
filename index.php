<?php

$title = "opdracht 11: navigatie met een array";

$navigation = ['index' => 'Home',
               'about' => 'Over ons',
               'portfolio' => 'Portfolio',
               'contact' => 'Contacteer ons'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
    <ul>
        <?php foreach($navigation as $classKey => $classLabel):?>
            <li><a href="#"> <?=$classKey . "  =>  " . $classLabel?></a> </li>
        <?php endforeach ?>
    </ul>
<input type="submit" name="submit" value="submit">
    
</body>
</html>