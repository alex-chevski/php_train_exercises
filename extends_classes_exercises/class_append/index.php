<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use App\src\HTMLDivElement;

$div = new HTMLDivElement(['class' => 'one two']);

$div->addClass('small');
$div->addClass('vit');
$div->addClass('vit');
$div->getAttribute('class');
$div->removeClass('one');
$div->getAttribute('class');
$div->toggleClass('small');
$div->toggleClass('give');
echo $div;
