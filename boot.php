<?php
/**
 * @var string The real path of Program
 */
$program_dir = __DIR__ . DIRECTORY_SEPARATOT;

$sys = require_once $program_dir . 'init.php';

$sys->import('main');

main($sys);
