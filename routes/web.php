<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (1 !== '1') {
        echo 'Numeric 1 is not equal to string 1<br>';
    }
    if ('2' >= 3) {
        echo 'String 2 is greater than or equal to numeric 3<br>';
    }
    if (11 > '2.1') {
        echo 'Numeric 11 is greater than string 2.1<br>';
    }
    if ('11th' < 2) {
        echo 'String 11th is less than numeric 2<br>';
    }
    if (999 < 'A1') {
        echo 'Numeric 999 is less than string A1<br>';
    }
    if ('#2' < 1) {
        echo 'String #2 is less than numeric 1<br>';
    }
    if (99999 < 'zero') {
        echo 'Numeric 99999 is less than string zero<br>';
    }
    return "Make sure you know your variables' types!";
});
