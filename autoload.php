<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespace('belazar13', __DIR__ . '/src');
$loader->register();
