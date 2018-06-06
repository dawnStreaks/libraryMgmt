<html>
<body>
<?php
echo "welome"."<br/>";
session_start();
$id=$_POST['id'];
$pswd=$_POST['pswd'];
$con=mysql_connect("localhost","root","");
if(!$con)
 {
 echo "error";
 }
else
 {
 mysql_select_db("library",$con);
 $result=mysql_query("SELECT * FROM login WHERE (logid='$id') and (password='$pswd')");
 echo $result;
 $numrows=mysql_num_rows($result);
 echo $numrows;
 if($numrows==1)
 {
   $_SESSION['id'] =$id;
   header('location:list1.php');
 }
 else
   header("Location:login.html");
} 
#mysql_close($con);
?>
</body>
</html>
