<?php

return [
    
    'components' => [
        
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=db_yii2_advanced',
            'username' => 'root',
            'password' => '1234',
            'charset' => 'utf8'
        ],
        
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true
        ]
        
    ]
    
];