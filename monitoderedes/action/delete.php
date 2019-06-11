<?php
require_once 'db_connect';

$id  =$_GET['id'];

$sql = "delete from computadores where id=$id";
$connect->query($sql);
$connect->close();

header("location:../index.php");

?>
