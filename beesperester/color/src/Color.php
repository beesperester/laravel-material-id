<?php

namespace Beesperester\Color;

use stdClass;

class Color
{
    private $r;
    private $g;
    private $b;

    public function __construct($r, $g, $b)
    {
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
    }

    public static function fromHex($hex)
    {
        list($r, $g, $b) = sscanf($hex, '#%02x%02x%02x');

        return new static($r, $g, $b);
    }

    public function getHex()
    {
        return sprintf('#%02x%02x%02x', $this->r, $this->g, $this->b);
    }

    public function getRgb()
    {
        $rgb = new stdClass();
        $rgb->r = $this->r;
        $rgb->g = $this->g;
        $rgb->b = $this->b;

        return $rgb;
    }

    public function getHsv($normalized = false, $precision = 2)
    {
        list($h, $s, $v) = rgbToHsv($this->r, $this->g, $this->b);

        if ($normalized) {
            $h = $h / 360;
            $s = $s / 100;
            $v = $v / 100;
        }

        $hsv = new stdClass();
        $hsv->h = round($h, $precision);
        $hsv->s = round($s, $precision);
        $hsv->v = round($v, $precision);

        return $hsv;
    }
}
