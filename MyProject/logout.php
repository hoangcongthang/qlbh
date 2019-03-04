<?php

setcookie('login_status', 'true', time()-1000, '/');
header("Location: login.php");