<?php
session_start();
session_destroy();
header('Location: /medac-laravel/public/');
exit;
?>