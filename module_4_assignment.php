<?php

function sort_strings_by_length_asc(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

    $strings = ['apple', 'orange', 'banana', 'pineapple'];
    $sorted_strings = sort_strings_by_length_asc($strings);
    print_r($sorted_strings);

    /*Output
    Array
(
    [0] => apple
    [1] => orange
    [2] => banana
    [3] => pineapple
)
    */


    function concat_reverse($str1, $str2) {
        $str1_len = strlen($str1);
        $str2_len = strlen($str2);
        $result = '';
        for ($i = $str1_len - 1; $i >= 0; $i--) {
            $result .= $str1[$i];
            if ($i == $str1_len - $str2_len) {
                break;
            }
        }
        for ($j = $str2_len - 1; $j >= 0; $j--) {
            $result .= $str2[$j];
        }
        return $result;
    }

        $str1 = 'Hello';
        $str2 = 'World';
        $result = concat_reverse($str1, $str2);
        echo $result; // outputs 'olleHdlroW'



    function remove_first_last($arr) {
        array_shift($arr); // remove first element
        array_pop($arr); // remove last element
        return $arr;
    }
    
        $arr = ['apple', 'orange', 'banana', 'pineapple'];
        $new_arr = remove_first_last($arr);
        print_r($new_arr); // outputs Array ( [1] => orange [2] => banana )


    
    function contains_only_letters_and_whitespace($str) {
        return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
    }
    
    $str1 = 'Hello World';
$str2 = 'Hello123';
$is_letters_whitespace_1 = contains_only_letters_and_whitespace($str1);
$is_letters_whitespace_2 = contains_only_letters_and_whitespace($str2);
var_dump($is_letters_whitespace_1); // outputs bool(true)
var_dump($is_letters_whitespace_2); // outputs bool(false)




function find_second_largest($arr) {
    $n = count($arr);
    if ($n < 2) {
        return null;
    }
    $max = $arr[0];
    $second_max = null;
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $max) {
            $second_max = $max;
            $max = $arr[$i];
        } else if ($arr[$i] !== $max && ($second_max === null || $arr[$i] > $second_max)) {
            $second_max = $arr[$i];
        }
    }
    return $second_max;
}

$arr = [2, 1, 5, 4, 3];
$second_largest = find_second_largest($arr);
echo $second_largest; // outputs 4
