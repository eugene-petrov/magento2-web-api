<?php
// @codingStandardsIgnoreFile
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Snippet_WebApi',
    isset($file) && realpath($file) == __FILE__ ? dirname($file) : __DIR__
);
