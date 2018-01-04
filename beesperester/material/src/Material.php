<?php

namespace Beesperester\Material;

// Illuminate
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
// Beesperester
use Beesperester\Color\Color;

class Material implements Arrayable, Jsonable
{
    /**
     * Name of material. Used for hashing and creation of hex color value.
     *
     * @var string
     */
    public $name;

    /**
     * Construct material object.
     *
     * @param string $name
     * @param string $salt
     */
    public function __construct(string $name, string $salt = '')
    {
        $this->name = $name;
        $this->hash = sha1($name.$salt);
    }

    /**
     * Create new material from name and salt.
     *
     * @param string $name
     * @param string $salt
     *
     * @return Material
     */
    public static function fromName(string $name, string $salt = '')
    {
        return new static($name, $salt);
    }

    /**
     * Get color for material.
     *
     * @return Beesperester\Color
     */
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
