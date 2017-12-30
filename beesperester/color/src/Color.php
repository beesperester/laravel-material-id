<?php

namespace Beesperester\Color;

use stdClass;
// Illuminate
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class Color implements Arrayable, Jsonable
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

    /**
     * Convert the model instance to JSON.
     *
     * @param int $options
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'rgb' => $this->getRgb(),
            'hex' => $this->getHex(),
            'hsv' => $this->getHsv(false, env('PRECISION', 2)),
            'hsvn' => $this->getHsv(true, env('PRECISION', 2)),
        ];
    }
}
