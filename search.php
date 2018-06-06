<html>
<body>
<?php
session_start();
$bookno=$_POST['bookno'];$con=mysql_connect("localhost","root","");
if(!$con)
 {
 echo "error";
 }
else
 {
 mysql_select_db("library",$con);
 $result=mysql_query("SELECT * FROM library WHERE (Bookno='$bookno')");
 $numrows=mysql_num_rows($result);
 if($numrows==1)
 {
  while ($row = mysql_fetch_array($result))
  {
   $field1= $row["Bookno"];
   $field2= $row["ISBNNo"];
   $field3= $row["Subject"];
   $field4= $row["BookName"];
   $field5= $row["Author"];
   $field6= $row["Publisher"];
   $field7= $row["Edition"];
   $field8= $row["Copies"];
   $field9= $row["Cost"];

   echo "BookNo: $field1<br>";
   echo "ISBN No: $field2<br>";
   echo "Subject: $field3<br>";
   echo "Book Name: $field4<br>";
   echo "Author: $field5<br>";
   echo "Publisher: $field6<br>";
   echo "Edition: $field7<br>";
   echo "Copies: $field8<br>";
   echo "Cost: $field9<p>";

  } 
 } 
 else
   echo "Item not found"; 
} 
#mysql_close($con);
?>
</body>
</html>
