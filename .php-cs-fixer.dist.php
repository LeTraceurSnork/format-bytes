<?php

$finder = PhpCsFixer\Finder::create()
                           ->in(__DIR__ . '/src')      // Укажите директорию с исходниками
                           ->in(__DIR__ . '/tests')     // Укажите дополнительные директории
                           ->name('*.php')              // Файлы с расширением .php
                           ->notName('*.blade.php')     // Исключить файлы шаблонов Blade (если используете Laravel)
                           ->ignoreDotFiles(true)       // Игнорировать файлы, начинающиеся с точки
                           ->ignoreVCS(true);           // Игнорировать VCS-файлы (например, .git)

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);
