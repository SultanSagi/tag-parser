<?php

namespace App\Classes;

use App\Interfaces\ParserInterface;

class App {
    public function parse($data, ParserInterface $parser) {
        return $parser->parse($data);
    }
}