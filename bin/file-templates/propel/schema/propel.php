<?php
// When you're part of a team, you could want to define a common configuration file and commit it into your VCS. But, of
// course, there can be some properties you don't want to share, e.g. database passwords. Propel helps you and looks for
// a propel.yml.dist file too, merging its properties with propel.yml ones. So you can define shared configuration
// properties in propel.yml.dist, committing it in your VCS, and keep propel.yml as private. The properties loaded from
// propel.yml overwrite the ones with the same name, loaded from propel.yml.dist.
//
// For a complete references see: http://propelorm.org/documentation/reference/configuration-file.html

$dir = dirname(__FILE__);

return [
    'propel' => [
        'paths' => [
            // The directory where Propel expects to find your `schema.xml` file.
            'schemaDir' => $dir,
        ],
        'database' => [
            'connections' => [
                'default' => [
                    'adapter' => 'sqlite',
                    'dsn' => 'sqlite:' . $dir . '/db/db.sq3',
                    'user' => 'root',
                    'password' => '',
                    'settings' => [
                        'charset' => 'utf8'
                    ]
                ]
            ]
        ]
    ]
];
