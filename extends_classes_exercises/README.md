1.Реализуйте класс HTMLHrElement (наследуется от HTMLElement), который отвечает за представление тега <hr>. Внутри класса определите функцию \_\_toString(), которая возвращает текстовое представление тега.(folder tag_view);

2.Реализуйте набор методов для работы с классами:
(folder class_append)
addClass($className) – добавляет класс
removeClass($className) – удаляет класс
toggleClass($className) – ставит класс если его не было и убирает если он был
Пример:
$div = new HTMLDivElement(['class' => 'one two']);
$div->getAttribute('class'); // 'one two'

$div->addClass('small');
$div->getAttribute('class'); // 'one two small'

$div->addClass('small');
$div->getAttribute('class'); // 'one two small'

$div->removeClass('two');
$div->getAttribute('class'); // 'one small'

$div->toggleClass('small');
$div->getAttribute('class'); // 'one'

$div->toggleClass('small');
$div->getAttribute('class'); // 'one small'
