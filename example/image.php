<?php 


require '../vendor/autoload.php';


use Belgian\Element\CreateElement;

$img = new CreateElement('img');
$img->setAttribute('src', 'image.png');
echo $img->getElement();

/*
    <img src="image.png" />
*/

