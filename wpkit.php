#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Wpkit\Command\PluginCreateCommand;
use Symfony\Component\Console\Application;

$pluginCreateCommand = new PluginCreateCommand();
$application = new Application();
$application->add($pluginCreateCommand);
$application->run();
