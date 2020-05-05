<?php

include 'autoload.php';

// function test($str1, $str2, $text = '')
// {
//     if ($str1 === $str2) {
//         echo "Тест $text пройден\n";
//     } else {
//         echo "Тест $text не пройден\n $str1 == $str2\n";
//     }
// }


//**************

function test($expected, $actual, $text = '')
{
    if ($expected === $actual) {
        echo "\033[32m";   // Red Color
        echo "Тест $text пройден\n";
        echo "\033[37m";
    } else {
        echo "\033[31m";   // Red Color
        echo "Тест $text не пройден\n";
        echo "\033[37m";

        echo "expected:\n";
        print_r($expected);
        echo "\n";

        echo "actual:\n";
        print_r($actual);
        echo "\n";
    }
}


$img = new Img();

test(
    "<img src='1.jpg'>",
    $img->setSrc('1.jpg')->html(),
    "Img"
);

test(
    "<img src='2.jpg' height='100' width='100'>",
    $img->setSrc('2.jpg')->setWidth(100)->setHeight(100)->html(),
    "Img"
);

test(
    "<img src='2.jpg' alt='img' height='100' width='100' border='2'>",
    $img->setSrc('2.jpg')->setAlt('img')->setWidth(100)->setHeight(100)->setBorder('2')->html(),
    "Img"
);


//**************


$br = new Br();

test(
    "<br>",
    $br->html(),
    "br"
);


//**************

$b = new B();

test(
    "<b class='a' id='a'>a</b>",
    $b->setClass('a')->setId('a')->setInnerText('a')->html(),
    "b"
);


//**************

$i = new I();

test(
    "<i id='i' class='i' style='i'>i</i>",
    $i->setClass('i')->setStyle('i')->setId('i')->setInnerText('i')->html(),
    "i"
);


//**************


$u = new U();

test(
    "<u id='u' class='u' style='u'>u</u>",
    $u->setClass('u')->setStyle('u')->setId('u')->setInnerText('u')->html(),
    "u"
);


//**************


$button = new Button();

test(
    "<button type='submit' name='send'>a</button>",
    $button->setType('submit')->setName('send')->setInnerText('a')->html(),
    "<button>"
);


//**************

$form = new Form();

test(
    "<form action='1.php' method='GET'><input type='text' name='name' value='admin'></form>",
    $form->setAction('1.php')->setMethod('GET')->setContent((new Input())->setType('text')->setName('name')->setValue('admin')->html())->html(),
    "<form>"
);


//**************


$h = new H();

test(
    "<h1 id='1' class='1' style='1'>header</h1>",
    $h->setLevel(1)->setId(1)->setClass('1')->setStyle('1')->setInnerText('header')->html(),
    "<h>"
);


//**************


$hr = new Hr();

test(
    "<hr color='red' size='5' width='5'>",
    $hr->setColor('red')->setSize(5)->setWidth(5)->html(),
    "<hr>"
);


//**************


$ul = new Ul();

test(
    "<ul type='circle' class='ul' style='aaa' id='123'><li>one</li><li>two</li><li>three</li></ul>",
    $ul->setType('circle')->setClass('ul')->setStyle('aaa')->setId('123')->setInnerData(['one', 'two', 'three'])->html(),
    "<ul>"
);


//**************


$ol = new Ol();

test(
    "<ol type='1' class='ol' style='aaa' id='123'><li>one</li><li>two</li><li>three</li></ol>",
    $ol->setType('1')->setClass('ol')->setStyle('aaa')->setId('123')->setInnerData(['one', 'two', 'three'])->html(),
    "<ul>"
);


//***************

$select = new Select();

test(
    "<select id='123' name='select'><option value='1'>one</option><option value='2'>two</option><option value='3'>three</option></select>",
    $select->setId('123')->setName('select')->setInnerData(['1' => 'one', '2' => 'two', '3' => 'three'])->html(),
    "<select>"
);


//**************** 


$textarea = new TextArea();

test(
    "<textarea name='text' id='123' class='text' style='style' coll='30' row='30'>aaa</textarea>",
    $textarea->setName('text')->setId('123')->setClass('text')->setStyle('style')->setColl(30)->setRow(30)->setInnerText('aaa')->html(),
    "<textarea>"
);
