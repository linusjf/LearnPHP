<?php
// compare strings
$a = "hello";
$b = "hello";
$c = "hEllo";
// output: 0
echo strcmp($a, $b);
// output: 1
echo strcmp($a, $c);

// count words
// output: 5
$str = "The name's Bond, James Bond";
echo str_word_count($str);
// replace '@' with 'at'
// output: 'john at domain.net'
$str = 'john@domain.net';
echo str_replace('@', ' at ', $str);

// remove leading and trailing whitespace
// output 'a b c'
$str = ' a b c ';
echo trim($str);
// change string case
$str = 'Yabba Dabba Doo';
// output: 'yabba dabba doo'
echo strtolower($str);
// output: 'YABBA DABBA DOO'
echo strtoupper($str);
// change string case
$str = 'the yellow brigands';
// output: 'The Yellow Brigands'
echo ucwords($str);
// output: 'The yellow brigands'
echo ucfirst($str);
?>
