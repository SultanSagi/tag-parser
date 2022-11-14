<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\App;
use App\Classes\TagParser;

class TagParserTest extends TestCase {
    public function test_it_parses() {
        $app = new App;
        
        $result = $app->parse('<div class="test"><span>Test</span></div>', new TagParser);

        $expected = ['div', 'span'];

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider tagsProvider
     */
    public function test_it_parses_tags($input, $expected)
    {
        $parser = new TagParser();

        $result = $parser->parse($input);

        $this->assertSame($expected, $result);
    }

    public function tagsProvider()
    {
        return [
            ['<div class="test"><span>Test</span></div>', ["div", "span"]],
            ["<Monte", []],
            ['<div class="test">', ["div"]],
        ];
    }
}