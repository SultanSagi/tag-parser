<?php

namespace App\Classes;

use App\Interfaces\ParserInterface;
use App\Collection\TagCollection;

class TagParser implements ParserInterface {
    protected $tags;

    public function parse($data) {
        $content = file_get_contents($data);
        // $content = $data;

        $tags = $this->match($content);
        $this->tags = $tags;

        return $tags;
    }

    public function tags() {
        return array_unique($this->tags);
    }

    public function tagsCount() {
        return count($this->tags);
    }

    private function match($data): array {
        preg_match_all('/<(\w+)(>|\s+[^>]*>)/', $data, $matches);

        return $matches ? $matches[1] : [];
    }
}