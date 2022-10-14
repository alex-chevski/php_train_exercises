<?php

declare(strict_types=1);

namespace App\src;

class HTMLDivElement extends HTMLElement
{
    public function __toString()
    {
        return $this->getAttribute('class');
    }
}
