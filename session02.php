<?php

session_start();
$_SESSION['num'] += 10;
echo $_SESSION['num'];
