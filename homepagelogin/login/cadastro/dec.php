<?php
session_start();
$check = $_POST['radio'];
$idusuario = $_POST['idusuario'];

if ($check === 'cli') {
    $_SESSION['dec'] = 'cli';
   header('Location: cliente.php');
}

elseif($check=== 'bre'){
   $_SESSION['dec'] = 'bre';
    header('Location: brecho.php');
}

?>