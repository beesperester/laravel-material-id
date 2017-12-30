<?php

namespace Beesperester\Material;

// Illuminate
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
// Beesperester
use Beesperester\Color\Color;

class Material implements Arrayable, Jsonable
{
    public $name;

    public function __construct(string $name, string $salt = '')
    {
        $this->name = $name;
        $this->hash = sha1($name.$salt);
    }

    public static function fromName(string $name, string $salt = '')
    {
        return new static($name, $salt);
    }

    public function getColor()
    {
        return Color::fromHex('#'.substr($this->hash, 0, 6));
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
            'name' => $this->name,
            'color' => $this->getColor()->toArray(),
        ];
    }
}
