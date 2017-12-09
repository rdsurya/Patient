<?php
include "global.php";
session_start();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

session_destroy();
echo '<script>document.location.href="'.$base_url.'index.php" </script>';
?>