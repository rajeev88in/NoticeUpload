<?php
    
include_once 'dbconfig.php';
if (isset($_GET['id']))
{	
	$x = $_GET['id'];
	$sql = "DELETE FROM notice_list where id = $x";
    mysqli_query($conn, $sql);
    header("Location: Main.php?st=delete");
}
?>