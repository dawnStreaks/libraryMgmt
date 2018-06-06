<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die       ('Error connecting to mysql');
mysql_select_db("library", $conn);
$query="SELECT * FROM library";
$result=mysql_query($query);

$num=mysql_num_rows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$field1_name=mysql_result($result,$i,"Bookno");
$field2_name=mysql_result($result,$i,"ISBNNo");
$field3_name=mysql_result($result,$i,"Subject");
$field4_name=mysql_result($result,$i,"BookName");
$field5_name=mysql_result($result,$i,"Author");
$field6_name=mysql_result($result,$i,"Publisher");
$field7_name=mysql_result($result,$i,"Edition");
$field8_name=mysql_result($result,$i,"Copies");
$field9_name=mysql_result($result,$i,"Cost");

echo "<b>$field1_name
$field2_name</b><br>$field3_name<br>$field4_name<br>$field5_name<hr><br>";

$i++;
}

?>
