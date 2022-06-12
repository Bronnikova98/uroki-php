<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "привет";
    ?>
    <br>
    <?php echo "это я тут";
    $i = 1;
    if ($i == 1) { ?>
        <div>
            <h1 style="color:blueviolet">i=1 верно</h1>
        </div>
    <?php
    }
    ?>

    <?php
    // вставка из другого файла php
    echo "начало 2 файла";
    include 'second.php';
    echo "конец 2 файла";
    echo "<br>";
    // преобразование типов
    $float = 4.3;
    echo "<br>";
    echo "явное преобразование типа float в int: " . $float, " -----> " . (int)$float;

    echo '<br><br>';
    // четность или нечетность числа
    $num = 220;
    $f = (float)($num / 2) - (int)($num / 2);
    if ($f) {
        echo "число нечетное";
    } else {
        echo "число четное";
    }

    echo '<br><br>';
    $massiv = array(
        '42',
        15,
        "hello",
        array(),
        9.1,
        null
    );
    // является ли переменная в массиве числом?
    foreach ($massiv as $mass) {
        if (is_numeric($mass)) {
            echo var_export($mass, true) . "- число", PHP_EOL;
            echo "<br>";
        } else {
            echo var_export($mass, true) . "- НЕ число", PHP_EOL;
            echo "<br>";
        }
    }
    echo "<br>";
    // округление чисел
    $n = 3.58866;
    // в большую сторону
    echo round($n, 3);
    echo "<br>";
    // в меньшую сторону
    $d = floor(8.99);
    echo $d;
    echo "<br>";
    // из десятичной в двоичную
    echo decbin(10);
    echo "<br>";

    echo '<br><br>';
    // подключение класса из другого файла point.php
    require 'point.php';
    // объект класса Point:
    $point1 = new Point();
    // присвоить значения переменным класса
    $point1->x = 13;
    $point1->y = 2;
    echo $point1->x;
    echo "<br>";
    $point2 = new Point();
    // присвоить значения переменным класса
    $point2->x = 133;
    $point2->y = 22;
    echo $point2->x;
    // удаление созданного объекта point2:
    unset($point2);
    echo "<br>";
    // обращение к статической переменной класса
    echo Point::$num;
    echo "<br>";
    // ссылки на объект (не на значение!!!)
    $first = new Point();
    $first->x = 3;
    $first->y = 3;
    // один и тот же объект при передаче ссылки
    $second = $first;
    $second->x = 5;
    $second->y = 5;
    echo "x = ", $first->x, " y = ", $first->y;
    echo "<br>";
    // ссылки на переменную (не на значение!!!)
    $first1 = 5;
    // знак & при передаче ссылки на переменную (значение 5 стало 3)
    $second = &$first1;
    $second = 3;
    echo $first1;
    echo "<br>";
    // если нужен клон объекта/клонирование
    $second1 = clone $first;
    $second1->x = 4;
    $second1->y = 6;
    echo "x = " . $second1->x . " y = " . $second1->y;
    echo "<br>";
    // расстояние между двумя точками
    $p1 = new Point();
    $p1->x = 3;
    $p1->y = 5;

    $p2 = new Point();
    $p2->x = 7;
    $p2->y = 12;

    echo sqrt(pow(($p2->x) - ($p1->x), 2) + pow(($p2->y - $p1->y), 2));
    echo "<br>";
    // константы
    define('CONSTANTA', 100000);
    echo CONSTANTA;
    echo "<br>";
    define("qwe", 200000);
    echo qwe;
    echo "<br>";
    // проверка существования константы с указанным именем
    if (defined("CONSTANTA")) {
        echo "CONSTANTA существует, она равна: " . CONSTANTA;
    }
    echo "<br>";
    if (defined("CONSTANTA1")) {
        echo "CONSTANTA1 существует";
    } else {
        echo "CONSTANTA1 НЕ существует";
    }
    echo "<br>";
    // когда мы не знаем имени константы
    $num = mt_rand(1, 10);
    $name = "VALUE($num)";
    define($name, $num);
    echo constant($name);
    echo "<br>";
    // путь к файлу при помощи константы
    echo "абсолютный путь к файлу: " . __DIR__ . '<br>';
    // подключение файла по относительному пути
    require "newfolder/newpoint.php";
    $newp = new NewPoint();
    $newp->x = 500;
    echo  $newp->x;
    echo "<br>";
    // константы в классе
    class ConstClass
    {
        const NAME = "str";
    }
    if (defined('ConstClass::NAME')) {
        echo "константа определена";
    }
    // возведение в степень **
    // остаток от деления %
    // -- ++ 
    // поразрядные операторы & | ^ ~ >> <<
    // == сравнение по значению, тип не важен
    // === сравнение по типу переменной и значению
    // логическое И &&
    // логическое ИЛИ ||
    // отрицание !
    // условие ? истина : ложь
    echo "<br>";
    $w = 2;
    if ($w == 1) {
        echo "1";
    } elseif ($w == 2) {
        echo "2";
    } else {
        echo "...";
    }
    echo "<br>";
    $char = 'c--';
    switch ($char) {
        case 'c++':
            echo 'c++';
            break;
        case 'c+-':
            echo 'c+-';
            break;
        default:
            echo 'c??';
    }
    echo "<br>";
    for ($i = 0; $i < 5; $i++) {
        echo "$i" . "<br>";
    }
    echo "<br>";
    // массивы
    // индексы массива (0, 1, 2)
    $arr = array("A", "B", "C");
    echo $arr[0];
    echo "<br>";
    // вывести весь массив
    print_r($arr);
    echo "<br>";

    $arr1 = ["A1", "B1", "C1"];
    print_r($arr1);
    echo "<br>";
    // индексы массива (15, 16, 17)
    $arr2 = [15 => "A1", "B1", "C1"];
    print_r($arr2);
    echo "<br>";
    // индексы массива (15, 8, 16)
    $arr3 = [15 => "A1", 8 => "B1", "C1"];
    print_r($arr3);
    echo "<br>";
    // создание массива по индексам
    $arr4[3] = '1';
    $arr4[6] = '2';
    $arr4[8] = '3';
    print_r($arr4);
    echo "<br>";
    $var = "Hello";
    $var1 = "World!";
    // создание массива из переменной
    $myarray = (array)$var;
    $myarray[5] = $var1;
    print_r($myarray);
    echo "<br>";
    // создание ассоциативного массива
    $arr5["one"] = '1';
    $arr5["two"] = '2';
    $arr5["three"] = '3';
    print_r($arr5);

    echo "<br>";
    // создание многомерного массива
    $arr6 = [
        'Авто' => ['машина1', 'машина2'],
        'Самолеты' => ['самолет1', 'самолет2'],
        'Корабли' => ['корабль1', 'корабль2'],
        5 => [51, 52]
    ];

    print_r($arr6);
    // машина1
    echo '<br>' . $arr6['Авто'][0];
    // 51
    echo '<br>' . $arr6[5][0];

    echo "<br>";
    // list
    $arrr = [1, 2, 3];
    list($one, $two, $tree) = $arrr;
    echo $one;

    // поменять местами значения переменных z и h
    $z = 3;
    $h = 4;
    echo "<br>" . $z . $h;
    list($z, $h) = [$h, $z];
    echo "<br>" . $z . $h;

    echo '<br><br>';
    // обход массива циклом
    $mass = [5, 6, 7, 8, 5, 4, 3, 1];
    for ($i = 0; $i < count($mass); $i++) {
        echo $mass[$i] . '<br>';
    }
    echo "<br>";
    $arr7 = [
        'Авто' => 1,
        'Самолеты' => 2,
        'Корабли' => 3
    ];
    foreach ($arr7 as $key => $value) {
        echo "$key : $value <br> ";
    }
    echo "<br>";
    $arr8 = [
        'Авто' => ['машина1', 'машина2', 'машина3'],
        'Самолеты' => ['самолет1', 'самолет2'],
        'Корабли' => ['корабль1', 'корабль2']

    ];

    foreach ($arr8 as $key => $mymassiv) {
        echo "$key <br>";
        foreach ($mymassiv as $value) {
            echo "$value <br>";
        }
    }

    echo "<br>";
    // слияние массивов
    $arr9 = [
        0 => 'one',
        1 => 'two'
    ];
    $arr10 = [
        2 => 'three',
        3 => 'fho'
    ];
    $con = $arr9 + $arr10;
    print_r($con);
    echo "<br>";

    $arr11 = ['one', 'two'];
    $arr12 = ['three', 'fho'];
    $con1 = array_merge($arr11, $arr12);
    print_r($con1);
    echo '<br><br>';

    // проверка что это массив
    if (is_array($arr11)) {
        echo "Это массив <br>";
    }

    // проверка существования элементов массива
    for ($i = 0; $i < 5; $i++) {
        if (isset($arr11[$i])) {
            echo "Элемент \$arr11[$i] существует <br>";
        } else {
            echo "Элемент \$arr11[$i] НЕ существует <br>";
        }
    }
    // существование значение
    $arr12 = [5, 3, 4];
    if (in_array(5, $arr12)) {
        echo "значение 5 есть в массиве \$arr12 <br>";
    }
    //существование ключа
    if (array_key_exists(2, $arr12)) {
        echo "ключ 2 есть в массиве \$arr12 <br>";
    }
    //найти ключ по значению
    echo "по значению 3 ключ " . array_search(3, $arr12) . " в массиве \$arr12 <br>";
    //удаление элементов массива
    unset($arr12[2]);
    print_r($arr12);
    //удаление всего массива
    unset($arr12);
    echo '<br><br>';

    // вывести случайный элемент массива
    $randmassiv = ['a', 'c', 'r', 'h', 'k', 'e', 'v'];
    echo $randmassiv[rand(0, count($randmassiv) - 1)];

    echo '<br><br>';
    // создать массив со случайным кол-вом от 5 до 10 элементов 
    // (значения от 0 до 100) и отсортировать по возрастанию
    $lenghtmass = rand(5, 10);
    for ($i = 0; $i < $lenghtmass; $i++) {
        $massrand[$i] = rand(0, 100);
    }
    sort($massrand);
    echo "<pre>";
    print_r($massrand);
    echo "</pre>";
    echo '<br><br>';

    // массив из строк файла
    $arr = file('month.txt');
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo '<br><br>';


    // создание функций
    function myFirstFunction($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }
    echo myFirstFunction(1, 2);

    echo '<br><br>';

    // c указание получаемых и возвращаемых типов
    function myFunction(int $a, int $b): float
    {
        $del = $a / $b;
        return $del;
    }
    echo myFunction(4, 3);

    echo '<br><br>';
    // увеличить значение переменной $g на 10 (было 5, стало 10) 
    // (передача параметров по ссылке (не по значению!))
    function sum(&$a)
    {
        $a += 10;
        return $a;
    }
    $g = 5;
    echo sum($g);
    echo "<br>";
    echo $g;

    echo "<br>";
    // обязательные параметры перед необязательными! $a=5 значение по умолчанию
    function sum1($g, $a = 5)
    {
        return $a + $g;
    }
    echo sum1(2);
    echo "<br>";
    echo sum1(2, 7);

    echo '<br><br>';

    // передать в функцию неизвестное количество параметров
    function outArgument(...$items)
    {
        foreach ($items as $arg) {
            echo "$arg<br>";
        }
    }
    outArgument('A', 'F', 'H');

    // передать в функцию значения массива
    function outArgument1($a, $b, $c)
    {
        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
    }
    $itemsmass = ['W', 'D', 'G'];
    outArgument1(...$itemsmass);

    function outArgument2(...$items)
    {
        foreach ($items as $arg) {
            echo "$arg";
        }
    }
    $itemsmassiv = ['a', 'c', 'v'];
    outArgument2(...$itemsmassiv);

    echo "<br>";
    // вернуть массив значений
    function outMassArg($bytes)
    {
        $kb = $bytes / 1024;
        $mb = $kb / 1024;
        $gb = $mb / 1024;
        return [$bytes, $kb, $mb, $gb];
    }
    echo "<pre>";
    print_r(outMassArg(6468456564));
    echo "</pre>";
    // присвоить массив значений переменным для дальнейшего использования значений
    list($bytes, $kbб, $mb, $gb) = outMassArg(6468456564);
    echo "$bytes<br>$kbб<br>$mb<br>$gb";


    echo '<br>';

    // рекурсия
    function recurs($r)
    {
        if ($r > 0) {
            echo ($r--) . '<br>';
            recurs($r);
        } else {
            return;
        }
    }
    recurs(5);
    echo '<br>';

    // вложенные функции
    function outter()
    {
        function inner()
        {
            return "hi";
        }
    }
    outter();
    echo inner();

    echo '<br><br>';

    // вызов одной из функций случайным образом
    function first()
    {
        return "first";
    }
    function second()
    {
        return "second";
    }
    // 1 - true, 0 - false
    $nameFunc = rand(0, 1) ? first() : second();
    echo $nameFunc();

    echo '<br><br>';

    // анонимные функции
    class Point2
    {
        public $x;
        public $y;
    }
    $fst = new Point2;
    $fst->x = 12;
    $fst->y = 5;

    $snd = new Point2;
    $snd->x = 1;
    $snd->y = 1;

    $thd = new Point2;
    $thd->x = 4;
    $thd->y = 10;

    $arraw = [$fst, $snd, $thd];

    echo "<pre>";
    print_r($arraw);
    echo "</pre>";
    echo "после сортировки";
    echo "</pre>";

    // сортировка с вложенной функцией
    usort($arraw, function ($a, $b) {
        $dist_a = sqrt($a->x ** 2 + $a->y ** 2);
        $dist_b = sqrt($b->x ** 2 + $b->y ** 2);
        // echo $dist_a <=> $dist_b;
        return $dist_a <=> $dist_b;
    });

    echo "<pre>";
    print_r($arraw);
    echo "</pre>";
    echo '<br><br>';

    // замыкание анонимной функции (доступ к переменной(неизменяемой) внутри функции)
    $message = 'Сообщение';
    $mFu = function () use ($message) {
        $message = 'Сообщение111';
        return $message;
    };
    echo $mFu();
    echo '<br>';
    echo $message;
    echo '<br><br>';

    // сумма аргументов
    function summ(...$items)
    {
        $sum = 0;
        for ($i = 0; $i < count($items); $i++) {
            $sum += $items[$i];
        }
        return $sum;
    }
    echo summ(5, 5, 7);

    echo '<br><br>';


    // строки, кодировка
    $str1 = 'Hello';
    $str2 = 'Привет';
    echo $str1[0];
    echo $str2[0];

    // длина строки
    echo strlen($str1);
    echo mb_strlen($str2);

    echo '<br>';

    // посимвольный вывод
    for ($i = 0; $i < strlen($str1); $i++) {
        echo $str1[$i] . "<br>";
    }

    // код символа
    echo chr(36) . "<br>";
    echo ord("$") . "<br>";

    // поиск в строке
    $date = "2020.06.25";
    // 2020
    echo substr($date, 0, 4);

    echo '<br>';
    // 14
    $strr = "Hello, world, hello";
    echo strpos($strr, 'hello');

    echo '<br>';
    // интерполируемый язык программирования
    $mystr = 'PHP - интерполируемый язык программирования';
    echo substr($mystr, strpos($mystr, 'интер'));

    echo '<br>';
    //замена в тексте
    $mystr1 = 'PHP - [b]интерполируемый[/b] язык программирования, а это [b]жирный текст[/b]';
    echo $mystr1;

    echo '<br>';

    // $mystr1 = str_replace('[b]', '<b>', $mystr1);
    // $mystr1 = str_replace('[/b]', '</b>', $mystr1);
    // или в одну строку
    $mystr1 = str_replace(['[b]', '[/b]'], ['<b>', '</b>'], $mystr1, $zamena);

    echo $mystr1;

    echo '<br>';
    echo 'осуществлено замен: ' . $zamena;
    echo '<br>';

    // удаление всех начальых и конечных пробелов в строке
    $mystr2 = '    PHP - class     ';
    echo $mystr2;
    echo '<br>';
    echo strlen($mystr2);

    echo '<br>';

    $mystr2 = trim($mystr2);
    echo $mystr2;
    echo '<br>';
    echo strlen($mystr2);

    echo '<br><br>';
    // обработка поля из формы от пользователя!!!!!!!!!!!!!!!!!!!!
    // htmlspecialchars
    // <script>alert("Сайт взломан")</script>
    ?>
    <form action="handler.php" method="post">
        <p>Сообщение:</p>
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>
    <?php
    // удаление тегов и возврат простого текста
    $mystr3 = '<p>текст</p><br><b>жирный текст</b>';
    echo $mystr3;
    echo '<br><br>';
    echo htmlspecialchars(strip_tags($mystr3));
    echo '<br><br>';
    // исключая тег
    echo (strip_tags($mystr3, '<b>'));

    echo '<br><br>';
    // форматный вывод
    // %d - спецификатор десятичного числа (целые)
    // %f - с плавающей точкой
    // %s - строковое представление
    printf("Первое число - %d", 26);

    echo '<br><br>';

    // разбиение строк
    $string = 'Имя, Фамилия, почта';
    print_r(explode(', ', $string));
    print_r(explode(', ', $string, 2));

    echo '<br><br>';
    // объединение строк
    $string2 = ['Имя', 'Фамилия'];
    print_r(implode(', ', $string2));

    // JSON
    $arr100 = [
        'name' => 'Petr',
        'phone' => ['888', '777']

    ];
    // кодирование
    $encodeArr = json_encode($arr100);
    echo $encodeArr;
    // декодирование
    print_r(json_decode($encodeArr, true));

    echo '<br><br>';
    // Передача параметров методом GET

    // https://localhost/uroki-php/?id=4556
    // echo $_GET['id'];

    // https://localhost/uroki-php/?id=4556&name=vika
    // Array ( [id] => 4556 [name] => vika )

    // https://localhost/uroki-php/?id[]=4556&id[]=123&name=vika
    // Array ( [id] => Array ( [0] => 4556 [1] => 123 ) [name] => vika )

    print_r($_GET);

    echo '<br><br>';
    // преобразование параметров в правильный адрес
    echo "<a href='test.php?params=" . urlencode("Привет, мир!") . "'>Ссылка </a>";
    echo '<br><br>';
    // разбиение строки с адресом на параметры
    $strUrl = "http://user:pass@www.site.ru/path/index.php?par=value#anch";
    echo $strUrl;
    echo '<br><br>';
    echo '<pre>';
    print_r(parse_url($strUrl));
    echo '</pre>';
    echo '<br><br>';
    // отдельный параметр
    echo parse_url($strUrl, PHP_URL_HOST);
    echo '<br>';
    echo parse_url($strUrl, PHP_URL_PATH);

    echo '<br><br>';
    // Валидация формы и отправка параметров методом POST
    ?>
    <form method="GET">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
    // проверка на заполнение полей формы (обязательное для 2 полей) empty - пустое, !empty - НЕ пустое
    if (!empty($_GET['first']) &&  !empty($_GET['second'])) {
        print_r($_GET);
    } else {
        echo "заполните поля формы";
    }
    ?>

    <!-- POST запрос -->
    <!-- ENT_QUOTES для преобразования кавычек к безопасной строке -->

    <!-- что-то не так -->
    <form method="POST">
        <input type="text" name="first1" value="<?php htmlspecialchars($_POST['first1'], ENT_QUOTES); ?>">
        <br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    $errors = [];
    if (!empty($_POST)) {
        if (empty($_POST['first1'])) {
            $errors[] = 'текстовое поле не заполнено';
        }
        if (empty($errors)) {
            echo htmlspecialchars($_POST['first1']);
            exit();
        }
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo $err;
        }
    }
    ?>
    <!-- Формы с чекбокс, селект, радио -->
    <form action="checkbox.php" method="POST">
        <input type="checkbox" name="html" value="1" checked>html<br>
        <input type="checkbox" name="scc" value="2">scc<br>
        <input type="checkbox" name="js" value="3">js<br>
        <input type="checkbox" name="php">php<br>
        <input type="submit" value="Отправить">

    </form>

    <form action="select.php" method="POST">
        <!-- несколько значений на выбор -->
        <select name="fst[]" multiple size="3">
            <option value="1" selected>111</option>
            <option value="2">222</option>
            <option value="3">333</option>

        </select>
        <br>
        <!-- одно значение на выбор -->
        <select name="snd" id="">
            <option value="one" selected>111</option>
            <option value="two">222</option>
            <option value="three">333</option>
        </select>
        <br>
        <input type="submit" value="Отправить">

    </form>
    <!-- выбор одного значения из группы -->
    <form action="radio.php" method="POST">
        <input type="radio" name="mark" value="1" checked>1<br>
        <input type="radio" name="mark" value="2" checked>2<br>
        <input type="radio" name="mark" value="3" checked>3<br>
        <input type="radio" name="mark" value="4" checked>4<br>
        <input type="radio" name="mark" value="5" checked>5<br>
        <input type="submit" value="Отправить">

    </form>

    <img src="gomer.png" alt="" style="max-width: 100px;">
    <!-- Загрузка файлов на сервер от пользователя-->


    <h3>Форма для загрузки картинки</h3>
    <form action="script.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="filename" size="">
        <input type="submit" value="Отправить">
    </form>

    <h3>Форма обратной связи и отправка на почту</h3>
    <!-- Форма обратной связи на языке PHP и отправка письма на почту -->
    <form action="sendmail.php" method="POST">
        <select name="subject">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос по уроку</option>
            <option value="2">Личный вопрос</option>
            <option value="3">Благодарность</option>
        </select>
        <br><br>
        <input type="email" name="email" placeholder="Введите ваш email" maxlength="50" required><br><br>
        <textarea name="message" placeholder="Введите сообщение" maxlength="100" required></textarea><br><br>

        <!-- картинка капчи -->
        <p>7*8=</p>
        <!--  -->
        <input type="number" name="capcha" placeholder="Введите ответ" maxlength="3" required><br><br>

        <input type="submit" value="Отправить письио">
    </form>

    <!-- Методы класса  (функция внутри класса = метод)-->
    <?php
    class Hello
    {
        public function text()
        {
            return 'hello? world&';
        }
    }
    // создание объекта класса
    $obj = new Hello;
    // обращение к методу обЪекта
    echo $obj->text();

    echo '<br><br>';


    class Point3
    {
        // напрямую изменять координаты нельзя
        private $x;
        private $y;

        // изменим private $x через метод setX, передав в него $x (установить координаты)
        public function setX($x)
        {
            // взять переменную класса здесь
            $this->x = $x;
        }

        // изменим private $y через метод setY, передав в него $y (установить координаты)
        public function setY($y)
        {
            // взять переменную класса здесь
            $this->y = $y;
        }

        // получить x (получить координаты)
        public function getX()
        {
            return $this->x;
        }

        // получить y (получить координаты)
        public function getY()
        {
            return $this->y;
        }

        // вычислние расстояния от начала координат до точки
        public function distance()
        {
            return sqrt($this->getX() ** 2 + $this->getY() ** 2);
        }
    }

    $p1 = new Point3;
    $p1->setX(5);
    $p1->setY(7);
    echo $p1->distance();

    echo '<br><br>';


    // Статические методы
    class Hello1
    {
        public static function text1()
        {
            return 'Привет, мир!';
        }
    }
    // создание объекта класса не обязательно!

    // обращение к методу обЪекта
    echo Hello1::text1();

    echo '<br><br>';


    // self - чтобы сослаться на статическую переменную класса
    class Page
    {
        static $content = 'Тело сайта<br>';
        public static function footer()
        {
            return 'Подвал сайта<br>';
        }
        public static function header()
        {
            return 'Шапка сайта<br>';
        }
        public static function site()
        {
            echo self::header() . self::$content . self::footer();
        }
    }
    // вызываем метод site()
    Page::site();

    echo '<br><br>';

    // Конструктор класса - метод класса, который автоматически выполняется в момент создания объекта!
    class People
    {
        private $name;
        public function __construct()
        {
            echo 'Вызов конструктора';
            $this->name = 'Ivan';
        }
    }

    $object = new People();

    echo '<pre>';
    echo print_r($object);
    echo '</pre>';

    class Point4
    {
        private $x;
        private $y;
        // равны 0 по умолчанию, если не передается значение
        public function __construct($x = 0, $y = 0)
        {
            // взять переменные класса здесь
            $this->x = $x;
            $this->y = $y;
        }

        // метод toString интерполирование объекта в строку
        public function __toString()
        {
            return "({$this->x},{$this->y})";
        }
    }
    $obj1 = new Point4(10, 20);
    $obj2 = new Point4();

    echo '<pre>';
    echo print_r($obj1);
    echo '</pre>';
    echo '<pre>';
    echo print_r($obj2);
    echo '</pre>';

    // вывод объекта в виде строки (x,y)
    echo "{$obj1}";

    echo '<br><br>';

    // Наследование и перегрузка методов
    // родительский класс
    class Animal
    {
        protected $legs = 4;
        // public - доступен вне класса, private - не доступен вне класса, protected - доступен при наследовании внутри классов!
        public function info()
        {
            echo "У меня {$this->legs} лапы<br>";
        }
        // final - нельзя переопределить метод!
        final public function info1()
        {
            echo "Люблю кушать";
        }
    }

    // наследующий класс
    class Dog extends Animal
    {
        public $name = "Собака";

        public function voice()
        {
            echo "{$this->name} - гав!<br>";
        }
    }
    // наследующий класс
    class Cat extends Animal
    {
        public $name = "Кошка";

        public function voice()
        {
            echo "{$this->name} - мяу!<br>";
        }
        // перегрузка (переопределение метода info)
        public function info()
        {
            echo "Я - {$this->name} и у меня {$this->legs} лапы<br>";
        }
        // не переопределенный метод родителя Animal
        public function parentInfo()
        {
            parent::info();
        }
    }

    // $animals = new Animal();
    // $animals->info();

    $dog = new Dog();
    $dog->info();
    $dog->voice();

    echo '<br><br>';

    $cat = new Cat();
    $cat->info();
    $cat->voice();
    $cat->parentInfo();

    echo '<br><br>';


    // Abstract и final классы
    // abstract - не можем от такого класса получать объекты, но можем от него наследовать
    // абстрактный родительский класс
    abstract class Animals
    {
        protected $legs = 4;
        public function info()
        {
            echo "У меня {$this->legs} крохотных лапки<br>";
        }
        // абстрактный метод класса (только внутри абстрактного! класса)
        // в наследующих классах этот метод должен быть обязательно определен!
        abstract public function color();
    }

    // наследующий класс
    class Mause extends Animals
    {
        public $name = "Мышь";

        public function voice()
        {
            echo "{$this->name} - пипипи!<br>";
        }
        // перегрузка метода color
        public function color()
        {
            echo "Я серого цвета<br>";
        }
    }

    $mause = new Mause();
    $mause->voice();
    $mause->info();
    $mause->color();

    //final- делает класс, у которого не может быть наследующих классов
    final class King
    {
        public function info()
        {
            echo "У меня нет наследников<br>";
        }
    }

    // чтобы узнать принадлежность класса
    if ($mause instanceof Animals) {
        echo "mause является экземпляром класса Animals <br>";
    }
    if ($mause instanceof Mause) {
        echo "mause является экземпляром класса Mause  <br>";
    }
    ?>

</body>

</html>