<?php 
    namespace Conf;
    class connectionString{
        public $db = Array(
            'mysql' => Array(
                'driver' => 'mysql',
                'host' => 'localhost',
                'username' => 'campus',
                'database' => 'mitienda',
                'password' => 'campus2023',
                'collation' => 'utf8mb4_unicode_ci',
                'flags' => [
                    // Turn off persistent connections
                    \PDO::ATTR_PERSISTENT => false,
                    // Enable exceptions
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    // Emulate prepared statements
                    \PDO::ATTR_EMULATE_PREPARES => true,
                    // Set default fetch mode to array
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    // Set character set
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                ],
            
                'psql' => Array(
                    'driver' => 'pgsql',
                    'host' => 'localhost',
                    'username' => 'postgres',
                    'database' => 'mitienda',
                    'password' => '123456',
                    'flags' => [
                        // Turn off persistent connections
                        \PDO::ATTR_PERSISTENT => false,
                        // Enable exceptions
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        // Set default fetch mode to array
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                        // Set character set
                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                    ]
                )
            )
        );
    }
        
?>