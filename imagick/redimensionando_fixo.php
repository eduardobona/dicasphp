<?php

// imagem original com 1920x1080
$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// redimensionando de maneira fixa
// desconsidera proporção (e pode perder qualidade)
$imagem->thumbnailImage(400, 400);

// imprimindo imagem na tela
header('Content-type: image/jpeg');
echo $imagem;