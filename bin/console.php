#!/usr/bin/env php
<?php

use CleverIt\UBL\Invoice\Command\StubCommand;

require_once __DIR__ . '/../vendor/autoload.php';

// Create the Application
$application = new Symfony\Component\Console\Application;

$application->add(new StubCommand());

// Run it
$application->run();