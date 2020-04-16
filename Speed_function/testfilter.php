<pre>
<?php
function speed_test($fun, $arg, $n = 100000)
{

    $time1 = microtime(TRUE);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }

    $time2 = microtime(TRUE);

    return $time2 - $time1;
}




$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);

$a2 = array_filter($a1, function ($x) {
    return $x > 0;
});
print_r($a2);





function test2($array)
{
    $a = [];
    foreach ($array as $value) {
        $a[] = $value > $value;
    }
    return $a;
};

function test3($array)
{
    $a = [];
    for ($i = 0; $i < count($array); $i++) {
        $a[] = $array[$i] > $array[$i];
    }
    return $a;
}

function test4($array)
{
    $a = [];
    $i = 0;
    while ($i < count($array)) {
        $a[] = $array[$i] > $array[$i];
        $i++;
    }
    return $a;
}

echo speed_test('array_filter', $a1);
echo "<br>";
echo speed_test('test2', $a1);
echo "<br>";
echo speed_test('test3', $a1);
echo "<br>";
echo speed_test('test4', $a1);
echo "<br>";
?>
</pre>