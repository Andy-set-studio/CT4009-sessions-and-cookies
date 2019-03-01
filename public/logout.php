<?php 

// We set an empty cookie that's "in the past" to delete it
// and log out
setcookie('auth_user', null, -1);
header('Location: /');
