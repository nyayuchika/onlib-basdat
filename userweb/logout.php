<?php
session_start();
session_destroy();
echo"<script>alert('Anda telah logout'); location='http://localhost/chika/web/index.php';</script>";
?>