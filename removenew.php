<?php
    
include_once 'dbconfig.php';
if (isset($_GET['id']))
{	
	$x = $_GET['id'];
	$sql = "UPDATE notice_list SET new = 1 where id = $x";
    mysqli_query($conn, $sql);
    header("Location: Main.php?st=new");
}
?>