<?php
$a = 5; # целое число
$b = '05'; # строка
var_dump($a == $b); /* При использовании оператора == выполнится нестрогое сравнение,
 а значит переменная $b со строкой приводится к целому число. В итоге, выведет boolean true */
var_dump((int)'012345'); // Явное приведение строки к целому числу. Выведет int 12345
var_dump((float)123.0 === (int)123.0); /* При использовании оператора === выполняется строгое сравнение,
 при котором сравниваются как значения, так и типы. Тип float сравнивается с типом int, выведет boolean false  */
var_dump(0 == 'hello, world'); /* В версии PHP 7.4 При нестрогом сравнении 'hello, world' приводится к числу,
 по скольку строка не начинается с числа, оно будет равна 0. Выведет boolean true.
 Начиная с версии РHP 8.0 поведение было изменено. Строки, которые не представляют собой числовое значение,
 больше не приводятся к 0. Выведет false */