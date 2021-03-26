<?php
// calculate length of string
// output: 17
$str = 'Welcome to Xanadu';
echo strlen($str);
// reverse string
// output: 'pets llams enO'
$str = 'One small step';
echo strrev($str);
// repeat string
// output: 'yoyoyo'
$str = 'yo';
echo str_repeat($str, 3);
// extract substring
// output: 'come'
$str = 'Welcome to nowhere';
echo substr($str, 3, 4);

// extract substring
// output: 'come here'
$str = 'Welcome to nowhere';
echo substr($str, 3, 5) . substr($str, -4, 4);

// output: 'r'
$str = 'abracadabra';
echo substr($str,2,1);

// output: 'r'
$str = 'abracadabra';
echo $str[2];
?>
