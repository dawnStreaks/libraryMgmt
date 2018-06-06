<?php
 class dboperation
 {
  var $con;
  var $db;
  function db_connect()
  {
  $this->con=mysqli_connect("localhost","root","");
  $this->db=mysqli_select_db($this->con,"library");
  }
  function insert_query($sql)
  {
    $this->result=mysqli_query($this->con,$sql);
	return $this->result;
  }
 }
 class lib
 {
  function insert_detail()
  {
	$bc=new dboperation();
	$bc->db_connect();
	$ab="insert into library(Bookno,ISBNNo,Subject,BookName,Author,Publisher,Edition,Copies,Cost)values($this->bkno,$this->isbno,'$this->sub','$this->bkname','$this->aut','$this->pub','$this->edit',$this->copies,$this->cost)";
	$res=$bc->insert_query($ab);
	return $res;
  }
 }
 $lb = new lib();
 $lb->bkno=$_POST['bookno'];
 $lb->isbno=$_POST['isbnno'];
 $lb->sub=$_POST['subject'];
 $lb->bkname=$_POST['bookname'];
 $lb->aut=$_POST['author'];
 $lb->pub=$_POST['publisher'];
 $lb->edit=$_POST['edition'];
 $lb->copies=$_POST['copies'];
 $lb->cost=$_POST['cost'];
 $rest=$lb->insert_detail();
 header("location:success.php");
?>

