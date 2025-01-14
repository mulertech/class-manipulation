<?php

$finder = PhpCsFixer\Finder::create()->in([
    'src',
    'tests',
]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);