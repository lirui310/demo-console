<?php
require_once __DIR__ . '/vendor/autoload.php';
$config = require_once __DIR__ . '/config.php';

$application = new \Symfony\Component\Console\Application();

$command = $config['command'] ?? [];
if ($command) {
    foreach ($command as $name) {
        $application->add(new $name());
    }
}

$application->run();