<?php

return [
    'dependencies' => ['backend'],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@creativekallol/ckeditor-abbr/abbreviation.js' => 'EXT:ckeditor_abbr/Resources/Public/JavaScript/Plugin/abbreviation.js',
        '@creativekallol/ckeditor-abbr/abbreviationediting.js' => 'EXT:ckeditor_abbr/Resources/Public/JavaScript/Plugin/abbreviationediting.js',
        '@creativekallol/ckeditor-abbr/abbreviationui.js' => 'EXT:ckeditor_abbr/Resources/Public/JavaScript/Plugin/abbreviationui.js',
        '@creativekallol/ckeditor-abbr/abbreviationview.js' => 'EXT:ckeditor_abbr/Resources/Public/JavaScript/Plugin/abbreviationview.js',
    ],
];
