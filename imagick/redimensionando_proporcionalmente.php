<?php

// imagem original com 1920x1080
$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// redimensionando mantendo proporção
// imagem ficará dentro dos limites estabelecidos
$imagem->thumbnailImage(400, 400, true);

// imprimindo imagem na tela
header('Content-type: image/jpeg');
echo $imagem;