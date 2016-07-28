<?php

require __DIR__ . '/autoload.php';


//$app = new \libs\Bootstrap();
$book = new \models\GuestBook();
$book->insRec('Name','Text23');