<?php

include "includes/config.php";

var_dump($site["title"]);
var_dump($config["db_host"]);

echo "<hr />";

require "includes/emails.php";

var_dump($emails['novo_cadastro']);