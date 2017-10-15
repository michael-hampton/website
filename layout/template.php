<?php
error_reporting (E_ALL);
//$arrIncludes = array("header.html", "preloader.html", "navigation.html", "/pages/".$page.".html", "footer.html", "includes.html");

require_once 'header.html';
require_once 'preloader.html';
?>

<div class="culmn">
    <?php
    require_once 'navigation.html';

    require_once '/pages/' . $page . '.html';



    require_once 'footer.html';
    require_once 'includes.html';
    ?>
</div>


