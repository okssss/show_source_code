<?php
$lines = file('http://google.com/');
foreach ($lines as $line_num => $line) {
   // Делим на строки и нумеруем
   echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n"; }
?>