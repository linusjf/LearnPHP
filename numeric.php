<?php
// round number up
// output: 19
$num = 19.7;
echo floor($num);
echo nl2br("\n");
// round number down
// output: 20
echo ceil($num);
echo nl2br("\n");
// return absolute value of number
// output: 19.7
$num = -19.7;
echo abs($num);
echo nl2br("\n");
// calculate 4 ^ 3
// output: 64
echo pow(4,3);
echo nl2br("\n");
// calculate natural log of 100
// output: 2.30258509299
echo log(10);
echo nl2br("\n");
// calculate log of 100, base 10
// output: 2
echo log(100,10);
echo nl2br("\n");
// calculate exponent of 2.30258509299
// output: 9.99999999996
echo exp(2.30258509299);
echo nl2br("\n");

echo rand();
echo nl2br("\n");

// generate a random number between 10 and 99
echo rand(10,99);
echo nl2br("\n");
// convert to binary
// output: 1000
echo decbin(8);
echo nl2br("\n");
// convert to hexadecimal
// output: 8
echo dechex(8);
echo nl2br("\n");
// convert to octal
// output: 10
echo decoct(8);
echo nl2br("\n");
// convert from octal
// output: 8
echo octdec(10);
echo nl2br("\n");
// convert from hexadecimal
// output: 101
echo hexdec(65);
echo nl2br("\n");
// convert from binary
// output: 8
echo bindec(1000);
echo nl2br("\n");
?>
