<?php
function giaiThua($n)
{
    if ($n == 1) {
        return 1;
    } elseif ($n == 0) {
        return 0;
    }
    return $n * giaiThua($n - 1);
}

function timUoc($n)
{
    $uoc = array();
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0)
            $uoc[] = $i;
    }
    return $uoc;
}

function gtriAm($array = array())
{
    $a = array();
    foreach ($array as $item) {
        if ($item < 0)
            $a[] = $item;
    }
    return $a;
}

function gtriDuong($array = array())
{
    $a = array();
    foreach ($array as $item) {
        if ($item > 0)
            $a[] = $item;
    }
    return $a;
}

function validate($n)
{
    if ($n > 0) {
        $h = floor($n / 3600);
        $m = floor(($n % 3600) / 60);
        $s = $n % 60;
        $result =  $h . ':' . $m . ':' . $s;
    } else {
        $result = 'Nhập lại n > 0';
    }
    return $result;
}
