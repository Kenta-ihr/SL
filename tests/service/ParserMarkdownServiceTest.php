<?php


/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/07
 * Time: 9:16
 */
class ParserMarkdownServiceTest extends PHPUnit_Framework_TestCase
{

    public function parseProvider()
    {
        return  [
            ['# title', '<h1>title</h1>', 'Return <h1> tag'],
            ['#    title', '<h1>title</h1>', 'Return <h1> tag if there are many white spaces'],
            ['## title', '<h2>title</h2>', 'Return <h2> tag'],
            ['### title', '<h3>title</h3>', 'Return <h3> tag'],
            ['#### title', '<h4>title</h4>', 'Return <h4> tag'],
            ['##### title', '<h5>title</h5>', 'Return <h5> tag'],
            ['###### title', '<h6>title</h6>', 'Return <h6> tag'],
            ['####### title', false, 'Return false'],
        ];
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParseMarkdown($excepted, $actual, $description)
    {
        $obj = new ParserMarkdownService;
        $this->assertEquals($actual, $obj->handle($excepted), $description);
    }
}

class ParserMarkdownService
{
    // My code.
    function handle($md)
    {
        preg_match("/\A(?<markdown>.*?)\s+(?<string>.*z?)\z/", $md, $matches);
        $num = strlen($matches['markdown']);
        if ($num <= 6) {
            return sprintf("<h%s>%s</h%s>", $num, $matches['string'], $num);
        }
        return false;
    }
}