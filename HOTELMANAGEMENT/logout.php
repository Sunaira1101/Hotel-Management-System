<?php

require('admin/extra/func.php');

session_start();
session_destroy();
redirect('index.php');


?>