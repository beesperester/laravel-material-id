<?php

namespace Beesperester\Color;

use stdClass;
// Illuminate
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class Color implements Arrayable, Jsonable
{
    /**
     * Red value.
     *
     * @var int
     */
    private $r;

    /**
     * Green value.
     *
     * @var int
     */
    private $g;

    /**
     * Blue value.
     *
     * @var int
     */
    private $b;

    /**
     * Construct color object.
     *
     * @param int $r
     * @param int $g
     * @param int $b
     */
    public function __construct($r, $g, $b)
    {
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
    }

    /**
     * Create new color object from hex.
     *
     * @param string $hex
     *
     * @return Color
     */
    public static function fromHex($hex)
    {
        list($r, $g, $b) = sscanf($hex, '#%02x%02x%02x');

        return new static($r, $g, $b);
    }

    /**
     * Get hex representation of color.
     *
     * @return string
     */
    public function getHex()
    {
        return sprintf('#%02x%02x%02x', $this->r, $this->g, $this->b);
    }

    /**
     * Get rgb representation of color.
     *
     * @param bool $normalized
     * @param int  $precision
     *
     * @return stdClass
     */
    public function getRgb(bool $normalized = false, $precision = 2)
    {
        $r = $this->r;
        $g = $this->g;
        $b = $this->b;

        if ($normalized) {
            $r = $r / 255;
            $g = $g / 255;
            $b = $b / 255;
        }

        $rgb = new stdClass();
        $rgb->r = round($r, $precision);
        $rgb->g = round($g, $precision);
        $rgb->b = round($b, $precision);

        return $rgb;
    }

    /**
     * Get hsv representation of color.
     *
     * @param bool $normalized
     * @param int  $precision
     *
     * @return stdClass
     */
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
            'rgbn' => $this->getRgb(true),
            'hex' => $this->getHex(),
            'hsv' => $this->getHsv(false, env('PRECISION', 2)),
            'hsvn' => $this->getHsv(true, env('PRECISION', 2)),
        ];
    }
}
