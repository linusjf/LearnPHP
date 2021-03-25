<?php
// define variables
$p = 10;
$q = 11;
$r = 11.3;
$s = 11;
// test if $q is greater than $p
// returns true
echo ($q > $p);
print ($q > $p);
echo $q > $p ? "TRUE":"FALSE";
// test if $q is less than $p
// returns false
echo ($q < $p);
print ($q < $p);
echo $q < $p ? "TRUE": "FALSE";
// test if $q is greater than or equal to $s
// returns true
echo ($q >= $s);
print ($q >= $s);
echo $q >= $s ? "TRUE": "FALSE";
// test if $r is less than or equal to $s
// returns false
echo ($r <= $s);
print ($r <= $s);
echo $r >= $s ? "TRUE": "FALSE";
// test if $q is equal to $s
// returns true
echo ($q == $s);
print ($q == $s);
echo $q == $s ? "TRUE": "FALSE";
// test if $q is equal to $r
// returns false
echo ($q == $r);
print ($q == $r);
echo $q == $r ? "TRUE":"FALSE";
?>
