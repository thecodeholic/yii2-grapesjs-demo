<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'fs' => [
            'class' => 'creocoder\flysystem\LocalFilesystem',
            'path' => '@webroot/files',
        ],
    ],
];
