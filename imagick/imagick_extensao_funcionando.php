<?php

if (! extension_loaded('imagick')) {
	echo 'Extensão Imagick não está habilitada para uso. <br />';
	echo '<a href="http://php.net/manual/en/book.imagick.php">php.net para Imagick</a>';

	exit;
}

echo 'Extensão Imagick está habilitada para uso.';

