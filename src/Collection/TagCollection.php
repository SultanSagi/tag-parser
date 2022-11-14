<?php

namespace App\Collection;

use Countable;

class TagCollection implements Countable {
    private $tags = [];

    public function __construct(array $tags) {
        $this->tags = array_unique($tags);
    }

    public function add($tag) {
        if ($this->has($tag)) {
            throw new \DomainException('Tag already exists.');
        }
        $this->tag[] = $tag;
    }

    public function remove($tag) {
        if (!$this->has($tag)) {
            throw new \DomainException('Tag not found.');
        }
        $this->tags = array_diff($this->tags, [$tag]);
    }

    public function has($tag) {
        return in_array($tag, $this->tags);
    }

    public function count(): int {
        return count($this->tags);
    }
}