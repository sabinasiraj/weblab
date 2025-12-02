<?php
$students = array("binshad","Mubarak","rishan","sara","ameen");

echo "<h3>array before printing:</h3>";
print_r($students);

asort($students);
echo "<h3>Ascending Order (asort):</h3>";
print_r($students);

arsort($students);
echo "<h3>Descending Order (arsort):</h3>";
print_r($students);
?>
