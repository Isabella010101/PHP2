<?php
// Página de logout (15c_logout.php)
session_start();
session_destroy(); //destrói a sessão do usuário
header("Location: 15a_sistema.php");
exit();

?>
