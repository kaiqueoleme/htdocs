<?php

setcookie('user', 'gabi', time()+3600);
echo $_COOKIE['user'];