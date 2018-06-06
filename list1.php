<?php
session_start();
echo "Welcome ";
echo $_SESSION['id'];
?>

<html>
<body bgcolor="#E6E6FA">
<h1>LIBRARY DATABASE</h1>
<script language="JavaScript" type="text/JavaScript">
</script>
 <form name="input" action="form.html"  method="post" >
 <input type="submit" value="New Entry" />
 </form>
 <form name="input" action="search.html"  method="post" >
 <input type="submit" value="Search" />
 </form>
 <form name="input" action="view.php"  method="post" >
 <input type="submit" value="View" />
 </form>
</body>
</html>

