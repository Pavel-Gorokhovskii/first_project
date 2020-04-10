<?php
function my_fun($x)
{
    return $x * $x;
}
$a = "my_fun";
echo $a(2);
echo "<br>";
echo $a(3);
echo "<br>";
function my_fyn($name)
{
    $name();
}
my_fyn(function () {
    echo "Hello";
});
echo "<br>";
$a = function ($name) {
    echo "Hello $name <br>";
};
$a("Piter");
$b = $a;
$b("Alex");
echo "<br>";
function speed_test($fun, $arg, $n = 100000)
{
    $time1 = microtime(TRUE);
    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(TRUE);
    return $time2 - $time1;
}
function my_sqrt($x)
{
    return pow($x, .5);
}
echo speed_test("sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt", 20);
echo "<br>";
function my_sqrt2($x)
{
    return $x ** 0.5;
}
echo speed_test("sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt2", 20);
echo "<br>";
echo "<pre>";
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($a1);
echo "<br>";
$a2 = array_map(function ($x) {
    return $x * $x;
}, $a1);
print_r($a2);
echo "<br>";
$arr = [];
foreach ($a1 as $value) {
    $arr[] = $value * $value;
}
print_r($arr);
echo "</pre>";
echo "<br>";
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function arr_map($array)
{
    array_map(function ($x) {
        return $x * $x;
    }, $array);
}
function cikl($array)
{
    $a = [];
    foreach ($array as $value) {
        $a[] = $value * $value;
    }
    return $a;
}
echo speed_test('arr_map', $a1);
echo "<br>";
echo speed_test("cikl", $a1);
echo "<br>";
function test($array)
{
    $a = [];
    for ($i = 0; $i < count($array); $i++) {
        $a[] = $array[$i] * $array[$i];
    }
    return $a;
}
echo speed_test('test', $a1);
echo "<br>";
echo "<pre>";
$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);
$a2 = array_filter($a1, function ($x) {
    return $x >= 0;
});
print_r($a2);
echo "</pre>";
echo "<br>";
echo "<pre>";
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($a1);
array_walk($a1, function ($item, $key) {
    echo "$key => $item <br>";
});
echo "<pre>";
echo "<br>";
echo "<pre>";
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($a1);
array_walk($a1, function (&$item, $key, $sp) {
    $item = "$key $sp $item";
}, "=");
print_r($a1);
echo "</pre>";
echo "<br>";
$msg = "Hello";
$test = function () use ($msg) {
    echo $msg;
};
$msg = "bye";
$test();
echo "<br>";
$msg = "Hello";
$test = function () use (&$msg) {
    echo $msg;
};
$msg = "bye";
$test();
echo "<br>";
