<?php

include 'autoload.php';

$b = new B('papapa');

echo $b
    ->setInnerText('Hello World')
    ->setClass("color")
    ->setId("12345")
    ->html();

$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();

$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();


$select = new Select();

echo $select
    ->setId('id1')
    ->setName('select')
    ->setInnerData([
        "mul" => "*",
        "div" => "/",
        "plus" => "+",
        "minus" => "-"
    ])
    ->html();

$form = new Form();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setName('name')->setValue('Admin')->html() .
            (new Input())->setType('password')->setName('pass')->setValue('123')->html() .
            (new Input())->setType('submit')->setValue('okey')->html()
    )
    ->html();




echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setName('num1')->setValue(12)->html())
    ->addContent((new Select())->setName('op')
        ->setInnerData([
            "mul" => "*",
            "div" => "/",
            "plus" => "+",
            "minus" => "-"
        ])
        ->html())
    ->addContent((new Input())->setName('num2')->setValue(12)->html())
    ->addContent((new Input())->setType('submit')->setValue('okey')->html())
    ->html();

echo "<br>";

$button = new Button();

echo $button
    ->setName("button")
    ->settype('submit')
    ->setInnerText('ok')
    ->html();

echo "<br>";

$textarea = new TextArea();

echo $textarea
    ->setName('textarea')
    ->setId('123')
    ->setClass('class')
    ->setStyle('style')
    ->setColl(20)
    ->setRow(20)
    ->html();

$hr = new Hr();

echo $hr
    ->setColor('red')
    ->setSize(5)
    ->setWidth(500)
    ->html();


$br = new Br();

echo $br
    ->html();

$img = new Img();

echo $img
    ->setSrc('1.jpg')
    ->setHeight(200)
    ->setWidth(200)
    ->setAlt('image')
    ->setBorder(1)
    ->html();

echo $br->html();

$h = new H();
echo $h->setLevel(1)
    ->setId('123')
    ->setClass('header')
    ->setStyle('qwerty')
    ->setInnerText('header')
    ->html();
