<?php
$_SESSION['username']="";
session_destroy();
/*session_start();
unset($_SESSION);
session_destroy();
$_SESSION = array();
session_write_close();*/
header('Location: http://www.mnsnhs.in/');
die;
?>
<script type='text/javascript'>
window.close();
</script>