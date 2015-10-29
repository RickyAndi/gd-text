<?php
namespace GDText\Tests;

use GDText\Color;

class ColorTest extends TestCase
{
    public function testPaletteImage()
    {
        $im = $this->openImageResource('owl.gif');

        $color = new Color(0, 0, 255);

        $index = $color->getIndex($im);
        $this->assertNotEquals(-1, $index);
    }

    public function testTrueColorImage()
    {
        $im = $this->openImageResource('owl_png24.png');

        $color = new Color(0, 0, 255);

        $index = $color->getIndex($im);
        $this->assertNotEquals(-1, $index);

        $im = imagecreatetruecolor(1, 1);

        $index = $color->getIndex($im);
        $this->assertNotEquals(-1, $index);
    }
}