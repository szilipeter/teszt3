<?php

// 222222222222222222222222222222222222222222222222222222222222222
// 33333333333333333333333333333
// 4444444444444



// 55555555555555555


// var_dump( array('CodeIgniter', 'php', 'phpMyAdmin', 'lucidar.me') );
// echo '<br>';
// $a=20;
// $b=50;
// echo $a+$b;


define('CLI_SCRIPT', true);
require('config.php');

$pluginman = core_plugin_manager::instance();

foreach ($pluginman->get_plugin_types() as $type => $dir) {
    $dir = substr($dir, strlen($CFG->dirroot));
    printf("%-20s %-50s %s".PHP_EOL, $type, $pluginman->plugintype_name_plural($type), $dir);
}


?>
