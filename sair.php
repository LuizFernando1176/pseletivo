<?php
include_once './util/config.php';
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
session_start();
session_destroy();
unset($_SESSION);
echo' <SCRIPT Language="javascript">
location.href="'. urlbase().'/login.php";
</SCRIPT>';
?>
