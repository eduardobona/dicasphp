<?php

// imagem original com 1920x1080
$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// redimensionando mantendo proporção
// imagem ficará dentro dos limites estabelecidos
$imagem->thumbnailImage(400, 400, true);

// salvando arquivo
$imagem->writeImage('./uploads/thumbnail_400_400/thumb400_1.jpg');