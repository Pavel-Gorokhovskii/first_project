<?php

include 'autoload.php';

function test($str1, $str2, $text = '')
{
    if ($str1 === $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден \n $str1 == $str2\n";
    }
}

$tictac = new Ai();

// test(
//     [[null, null, null], [null, null, null], [null, null, null]],
//     $tictac->getMap(),
//     "Tictac"
// );

// test(
//     [[1, 0, null], [null, 1, 0], [null, null, 1]],
//     $tictac->putCross(0, 0)->putNull(0, 1)->putCross(1, 1)->putNull(1, 2)->putCross(2, 2)->getMap(),
//     "Tictac"
// );

// test(
//     [[0, 0, 0], [null, 1, null], [null, null, 1]],
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(0, 1)->putCross(2, 2)->putNull(0, 2)->getMap(),
//     "Tictac"
// );

// test(
//     0,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(0, 1)->putCross(2, 2)->putNull(0, 2)->checWin(),
//     "Tictac"
// );

// test(
//     1,
//     $tictac->initMap(3)->putCross(0, 0)->putNull(1, 1)->putCross(0, 1)->putNull(2, 2)->putCross(0, 2)->checWin(),
//     "Tictac"
// );

// test(
//     1,
//     $tictac->initMap(3)->putCross(2, 0)->putNull(1, 1)->putCross(2, 1)->putNull(0, 2)->putCross(2, 2)->checWin(),
//     "Tictac"
// );

// test(
//     1,
//     $tictac->initMap(3)->putCross(0, 0)->putNull(1, 1)->putCross(1, 0)->putNull(0, 2)->putCross(2, 0)->checWin(),
//     "Tictac"
// );

// test(
//     0,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(1, 0)->putCross(0, 2)->putNull(2, 0)->checWin(),
//     "Tictac"
// );

// test(
//     null,
//     $tictac->initMap(3)->putNull(0, 0)->putCross(1, 1)->putNull(1, 0)->putCross(0, 2)->checWin(),
//     "Tictac"
// );


// test(
//     1,
//     $tictac->setMap([
//         [1, 0, 0],
//         [0, 1, 0],
//         [0, 0, 1]
//     ])->checWinByMainDiag(),
//     "1 diag"
// );

// test(
//     0,
//     $tictac->setMap([
//         [0, 1, 1],
//         [1, 0, 1],
//         [0, 1, 0]
//     ])->checWinByMainDiag(),
//     "0 diag"
// );

// test(
//     null,
//     $tictac->setMap([
//         [0, 0, 1],
//         [1, 1, 0],
//         [0, 1, 0]
//     ])->checWin(),
//     "with out win"
// );

// test(
//     null,
//     $tictac->setMap([
//         [1, 0, 1],
//         [1, 0, 0],
//         [0, 1, 1]
//     ])->checWinByMainDiag(),
//     "with out win"
// );

// test(
//     1,
//     $tictac->setMap([
//         [1, 1, 1],
//         [0, 0, 1],
//         [1, 0, 0]
//     ])->checWin(),
//     "1 row"
// );

// test(
//     0,
//     $tictac->setMap([
//         [0, 1, 1],
//         [0, 0, 1],
//         [0, 1, 0]
//     ])->checWin(),
//     "0 coll"
// );


// test(
//     0,
//     $tictac->setMap([
//         [1, 0, 0],
//         [0, 0, 1],
//         [0, 1, 1]
//     ])->checWin(),
//     "Tictac"
// );

// test(
//     1,
//     $tictac->setMap([
//         [0, 0, 1],
//         [0, 1, 0],
//         [1, 0, 1]
//     ])->checWin(),
//     "Tictac"
// );

// test(
//     0,
//     $tictac->setMap([
//         [1, 0, 0],
//         [0, 0, 1],
//         [0, 1, 1]
//     ])->checWin(),
//     "Tictac"
// );

// test(
//     null,
//     $tictac->setMap([
//         [1, 0, 1],
//         [1, 0, 0],
//         [0, 1, 1]
//     ])->checWin(),
//     "Tictac"
// );

test(
    1,
    $tictac->setMap([
        [1, 0, 0],
        [0, 1, 0],
        [1, 0, 1]
    ])->checWin(),
    "x win by main diag"
);

test(
    1,
    $tictac->setMap([
        [0, 0, 1],
        [0, 1, 0],
        [1, 0, 1]
    ])->checWin(),
    "x win by second diag"
);

test(
    1,
    $tictac->setMap([
        [1, 1, 1],
        [0, 1, 0],
        [1, 0, 0]
    ])->checWin(),
    "x win by row"
);

test(
    1,
    $tictac->setMap([
        [1, 0, 1],
        [1, 1, 0],
        [1, 0, 0]
    ])->checWin(),
    "x win by coll"
);

test(
    0,
    $tictac->setMap([
        [0, 0, 1],
        [0, 0, 1],
        [1, 1, 0]
    ])->checWin(),
    "0 win by main diag"
);

test(
    0,
    $tictac->setMap([
        [1, 0, 0],
        [1, 0, 0],
        [0, 1, 1]
    ])->checWin(),
    "0 win by second diag"
);

test(
    0,
    $tictac->setMap([
        [0, 1, 1],
        [0, 0, 0],
        [1, 0, 0]
    ])->checWin(),
    "0 win by row"
);

test(
    0,
    $tictac->setMap([
        [1, 0, 0],
        [0, 1, 0],
        [1, 0, 0]
    ])->checWin(),
    "0 win by coll"
);

test(
    null,
    $tictac->setMap([
        [1, 0, 1],
        [1, 0, 0],
        [0, 1, 1]
    ])->checWin(),
    "Tictac"
);


print_r($tictac->setMap([
    [null, null, null],
    [null, null, null],
    [null, null, null]
])
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->putRandNull()
    ->putRandCross()
    ->getMap());

echo $tictac->checWin();
