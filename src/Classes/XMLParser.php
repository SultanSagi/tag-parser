<?php

namespace App\Classes;

use App\Interfaces\ParserInterface;

class XMLParser implements ParserInterface {
    public function parse($data) {
        var_dump("xml parsing");
    }
}