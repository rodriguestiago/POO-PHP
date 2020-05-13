<?php

    require 'form.php';
    require 'html.php';
    require 'validator.php';
    $form = new Form();
    $html = new Html();
    $valid = new Validator($_POST);
    $valid -> valid('submit');
?>

<!DOCTYPE html>
<html lang="en">

    <?= $html-> headerData("head")?>
    <?= $html-> headerData("meta","charset=UTF-8")?>
    <?= $html-> headerData("/head")?>
    
<body>
    
    <?= $form -> createForm("post")?>
    <?= $form -> input('text','username')?>
    <?= $form -> input('email','email')?>
    <?= $form -> input('password','password')?>
    <?= $form -> input('radio','Male')?>
    <?= $form -> input('checkbox','I have a bike')?>
    <?=$form -> submit()?>
 
</body>
</html>