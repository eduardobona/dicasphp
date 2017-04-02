<?php

// imagem original com 1920x1080
$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// crop (corte) em tamanho exato em thumbnail
// com isso ele redimensiona ao máximo e faz o corte centralizado
$imagem->cropThumbnailImage(400, 400);

// imprimindo imagem na tela
header('Content-type: image/jpeg');
echo $imagem;