<?php

$imgSrc = $_GET["img"];

unlink($imgSrc);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
