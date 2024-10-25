<?php

// define which files should be analyzed
$finder = PhpCsFixer\Finder::create()
    ->exclude(__DIR__ . '/site/plugins')
    ->in(__DIR__ . '/site')
;

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'long'],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ;
