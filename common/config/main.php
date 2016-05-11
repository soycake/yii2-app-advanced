<?php

return [
    
    'language' => 'th', // ตงั้ ค่าภาษาไทย
    'timeZone' => 'Asia/Bangkok', // ตงั้ ค่า TimeZone
    
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        
        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],
        
        'cache' => [
            'class' => 'yii\caching\FileCache'
        ]
        
    ]
    
];