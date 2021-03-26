<?php
// repeat continuously until counter becomes 10
// output: 'xxxxxxxxx'
$counter = 1;
while ($counter < 10) {
 echo 'x';
 $counter++;
}
echo nl2br("\n");
echo nl2br("\n");
// repeat continuously until counter becomes 10
// output: 'xxxxxxxxx'
$counter = 1;
do {
 echo 'x';
 $counter++;
} while ($counter < 10);
echo nl2br("\n");
echo nl2br("\n");
// repeat continuously until counter becomes 10
// output:
for ($x=1; $x<10; $x++) 
 echo "$x ";
echo nl2br("\n");
echo nl2br("\n");
// generate ordered list of 6 items
echo "<ol>";
for ($x=1; $x<7; $x++) 
 echo "<li>Item $x</li>";
echo "</ol>";
?>
