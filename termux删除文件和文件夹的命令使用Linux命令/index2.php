<?php


include 'vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();


$builder->save('out.jpg');


header('Content-type: image/jpeg');
$builder->output();



?>

