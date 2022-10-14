<?php

declare(strict_types=1);

namespace App;

class HTMLElement
{
    protected $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function setAttributes(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    public function getAttributes(string $key)
    {
        return $this->attributes[$key];
    }

    protected function stringifyAttributes()
    {
        $attributes = $this->attributes;

        $pairsAttributesString = function ($attributes): string {
            $pairs = array_map(fn ($value, $key) => "{$key}={$value}", $attributes, array_keys($attributes));

            return implode(', ', $pairs);
        };

        return $pairsAttributesString($attributes);
    }
}
