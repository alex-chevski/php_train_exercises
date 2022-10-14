<?php

declare(strict_types=1);

namespace App\src;

class HTMLElement implements HTMLValueInterface
{
    protected $atributes = [];

    public function __construct($atributes)
    {
        $this->atributes = $atributes;
    }

    public function addClass($className): void
    {
        $atributes = $this->atributes;

        $new_atributes = $this->appendNewValue($atributes, $className);

        $this->atributes = $new_atributes;
    }

    public function getAttribute($key)
    {
        return $this->atributes[$key];
    }

    public function removeClass($className): void
    {
        $atributes = $this->atributes;

        $attr_values = explode(' ', $atributes['class']);

        $new_atributes = $this->filterClasses($attr_values, $className);

        $this->atributes['class'] = implode(' ', $new_atributes);
    }

    public function toggleClass($className): void
    {
        $atributes = $this->atributes;
        $attr_values = explode(' ', $atributes['class']);

        if (count($attr_values) === count($this->filterClasses($attr_values, $className))) {
            $this->addClass($className);
        } else {
            $this->removeClass($className);
        }
    }

    private function appendNewValue(array $atribute, string $new_value)
    {
        return array_map(fn ($attr_values) => "{$attr_values} {$new_value}", $atribute);
    }

    private function filterClasses(array $haystack, string $needle)
    {
        return array_values(array_filter($haystack, fn ($value) => $value === $needle ? '' : $value));
    }
}
