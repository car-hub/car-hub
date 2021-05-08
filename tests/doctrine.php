<?php

declare(strict_types=1);

require __DIR__.'/bootstrap.php';
$kernel = new CarHub\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

return $kernel->getContainer()->get('doctrine')->getManager();
