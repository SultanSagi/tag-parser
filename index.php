<?php

require 'vendor/autoload.php';

use App\Classes\TagParser;

$parser = new TagParser;

$url = "https://codingreflections.com/wordpress-programming-languages";

$parser->parse($url);

$parser->tags();
$parser->tagsCount();