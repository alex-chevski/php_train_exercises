<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use App\HTMLHrElement;

$hr = new HTMLHrElement([]);
echo $hr;

$hr = new HTMLHrElement(['class' => 'w-13', 'id' => 'wop']);
echo $hr; // '<hr class="w-13" id="wop">';
