<?php
$indianplayers=array("MS Dhoni", "Sachin Tendulkar","Virat Kohli","Ravindra Jadeja","Mohammed Shami");
echo"<table border='1'>
<tr>
<th>Sl NO</th>
<th>Player Name</th>
</tr>";
$i=1;
foreach($indianplayers as $player)
{
echo "<tr>
<td>$i</td> 
<td>$player</td>
</tr>";
$i++;
}
echo"</table>";
?>