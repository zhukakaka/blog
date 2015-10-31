<?php

return array(
    'connections' => array(
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => isset($_ENV['MYSQL_DB_HOST']) ? $_ENV['MYSQL_DB_HOST'] : '192.168.1.200',
            'database'  => isset($_ENV['MYSQL_DB_NAME']) ? $_ENV['MYSQL_DB_NAME'] : 'ydf',
            'username'  => isset($_ENV['MYSQL_DB_USER']) ? $_ENV['MYSQL_DB_USER'] : 'ydf',
            'password'  => isset($_ENV['MYSQL_DB_PWD']) ? $_ENV['MYSQL_DB_PWD'] : '111111',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ),
    ),

);