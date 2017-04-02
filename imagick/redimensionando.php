<?php

$upload = 'uploads/senna.jpg';

$imagem = new Imagick($upload);

// imprimindo imagem na tela
header('Content-type: image/jpeg');

//$imagem->cropThumbnailImage(400, 400);
//$imagem->thumbnailImage(400, 400);
$imagem->thumbnailImage(400, 400, true);


echo $imagem;