<?php

// imagem original com 1920x1080
$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// crop (corte) em tamanho exato na imagem original
// com isso ele vai fazer o crop no tamanho especificado
// e é preciso fornecer X e Y
$imagem->cropImage(400, 400, 1500, 500);

// imprimindo imagem na tela
header('Content-type: image/jpeg');
echo $imagem;