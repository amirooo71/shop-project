<?php

require 'includes/init.php';

$login = new UserLogin();

$login->logout();
redirect("index.php");




