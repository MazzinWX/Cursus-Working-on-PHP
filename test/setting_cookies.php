<?php
setrawcookie('pseudo', '$_POST[\'user_name\']', time() + 365*24*3600, null, null, false, true);
?>