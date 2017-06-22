<?php
    // if DS is defined not do anything
    // if not define it
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    echo __DIR__;
    echo "<br/>";
    echo DS;
?>