<?php

include "includes/config.php";
var_dump($site["title"]);

// alterando valor
$site["title"] = "Novo texto para Dicas PHP";

include "includes/config.php";
var_dump($site["title"]);

echo "<hr />";

include_once "includes/config.php";
var_dump($site["title"]);

// alterando valor
$site["title"] = "Novo texto para Dicas PHP";

include_once "includes/config.php";
var_dump($site["title"]);