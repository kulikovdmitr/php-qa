## Regular Expressions, yep like a Pearl
https://yadi.sk/d/RW7iqxPS3RPUka

## Let's become a Senior Backend Developer!
https://refactoring.guru/ru/design-patterns
https://habrahabr.ru/post/188010/

Посмотреть эти видео опционально, если вы хотите, чтобы все вокруг считали вас гуру алгоритмов:
https://www.youtube.com/playlist?list=PLDrmKwRSNx7KcHxyf9hSmF3fTLKSwujkM

## Find it faster, find it cheaper!
Написать на PHP класс для поиска самого дешевого маршрута.
Метод должна получать на входе три параметра:
* название населенного пункта отправления
* название населенного пункта прибытия
* список, каждый элемент которого представляет собой названия неких двух населенных пунктов и стоимость проезда от одного населенного пункта до другого.

На выходе функция должна возвращать самый дешевый маршрут между населенными пунктами отправления и прибытия,
в виде списка транзитных населенных пунктов (в порядке следования), а также общую стоимость проезда.

```php
$routes = [];
$routes[] = new Route(['from'=>'a', 'to'=>'b', 'price'=>100]);
$routes[] = new Route(['from'=>'c', 'to'=>'d', 'price'=>300]);
$routes[] = new Route(['from'=>'b', 'to'=>'c', 'price'=>200]);
$routes[] = new Route(['from'=>'a', 'to'=>'d', 'price'=>900]);
$routes[] = new Route(['from'=>'b', 'to'=>'d', 'price'=>300]);

$find->shortestPath('a', 'd', $routes);
return информации типа:

Из: a
В: d
Путь: a -> b -> d
Цена: 400
```

## Deal With It 
Дана строка.
Заменить все email на ***** (количество звездочек равно длине заменяемого фрагмента).
Примеры ссылок: example@test.ru на *************** и т.п.
Решить двумя способами: с использованием регулярных выражений и без.
Сравнить скорости работы.

## Regexp
Определение правильной скобочной последовательности.
Можно сделать два решения с регулярками и без них.  
Сравнить скорости работы.

```php
// Правильная скобочная ...
$str = '([<>])';

// бла бла бла
$str = '([)]';
```

## Ban this items 
Реализуйте функцию-противоположность array_unique.
Наша функция должна оставлять элементы, имеющие дубли.

## Find the longest
Дана строка с текстом.
Выведите на экран самое длинное слово из этого текста
(или слова если несколько слов имеют одинаковую длину).

## A Healthy Car Goes Career
В карьере А есть куча камней (сгенерированный массив),
вес которых - от 1 килограмма до 20 тонн.
Есть грузовик, который может перевезти за один раз 30 тонн.
Грузовик должен перевезти все камни из карьера А в карьер Б.

Надо предоставить PHP скрипт,
который поможет грузовику перевезти все камни из карьера А в карьер Б за минимальное количество поездок.
Учитывать только вес камней - объем не имеет значения.

## Get Maximum
Необходимо найти индексы M и N между которыми сумма элементов будет максимальна.
Массив состоит из целых чисел.
Например:

```php
$a = [1, 2, 100, 101, -1000, 10, 1];
$getMax = $find->process($a); // returns [from => 0, to => 3, sum => 204]
```

Если все числа отрицательные:
```php
$a = [-5, -2, -15];
$getMax = $find->process($a); // returns [from => 1, to => 1, sum => -2]
```






