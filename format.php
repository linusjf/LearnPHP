<?php
// format number (with defaults)
// output: 1,106,483
$num = 1106482.5843;
echo number_format($num);
echo nl2br("\n");
// format number (with custom separators)
// output: 1?106?482*584
echo number_format($num,3,'*','?');
echo nl2br("\n");
// format as decimal number
// output: 00065
printf("%05d", 65);
echo nl2br("\n");
// format as floating-point number
// output: 00239.000
printf("%09.3f", 239);
echo nl2br("\n");
// format as octal number
// output: 10
printf("%4o", 8);
echo nl2br("\n");
// format number
// incorporate into string
// output: 'I see 8 apples and 26.00 oranges'
printf("I see %4d apples and %4.2f oranges", 8, 26);
echo nl2br("\n");
?>
