<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
        'ScorpWebs\Tools' => __DIR__ . '/../../vendor/scorpwebs/fpdf-phalcon/',
    ));

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->helpersDir,
        $config->application->libraryDir,
        $config->application->modelsDir
    ]
);

$loader->register();



