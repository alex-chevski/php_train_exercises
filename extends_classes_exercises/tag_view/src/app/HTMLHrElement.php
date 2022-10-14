<?php

declare(strict_types=1);

namespace App;

class HTMLHrElement extends HTMLElement
{
    public function __toString()
    {
        $attrLine = $this->stringifyAttributes();

        return $attrLine ? "<hr {$attrLine}>" : '<hr>';
    }
}
