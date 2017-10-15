<?php

$page = str_replace (".php", "", basename ($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']));

$page = $page == "site" ? "index" : $page;
require_once 'layout/template.php';

