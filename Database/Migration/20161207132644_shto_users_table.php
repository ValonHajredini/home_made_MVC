<?php
// Krijon tabelen me emrin users dhe shkrun fushat e tabeles me atributet e saja
$createTable = [
        'tableName' => 'users',
        'model'     => 'User',
        'fields'    =>[
                'firsName'  => ['type' => 'string', 'require' => true, 'maxLength' => 30],
                'lastName'  => ['type' => 'string', 'require' => true, 'maxLength' => 30],
                'age'       => ['type' => 'int',    'require' => false, 'maxLength' => 3]
        ]
];

// Fshin tabelen me emrin users
$dropTable = [
        'tableName' => 'users',
        'model'     => 'User'
];