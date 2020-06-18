<?php
session_start();
session_destroy();
header('location:http://localhost/techno/login.html');
?>