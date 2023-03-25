<?php
session_start();
session_destroy();
echo "<script>location='welcome.php'</script>";
