<?php
namespace CrudKit\Data\Connection;

use Doctrine\DBAL\DriverManager;

class MySQLConnection extends BaseConnection
{
    /**
     * Adds support for MySQL-specific data types
     * not automatically supported by Doctrine
     *
     * @var array
     */
    private $additionalTypeMappings = [
        'enum'  => 'string',
        'set'   => 'string'
    ];

    public function __construct($user, $pass, $db, $extra = [])
    {
        $params = [
            'driver'   => 'pdo_mysql',
            'user'     => $user,
            'password' => $pass,
            'dbname'   => $db,
        ];

        if (isset($extra['host'])) {
            $params['host'] = $extra['host'];
        }
        if (isset($extra['port'])) {
            $params['port'] = $extra['port'];
        }
        if (isset($extra['charset'])) {
            $params['charset'] = $extra['charset'];
        }

        $this->setConnection(DriverManager::getConnection($params));

        $platform = $this->getConnection()->getDatabasePlatform();
        foreach($this->additionalTypeMappings as $typeName => $type) {
            $platform->registerDoctrineTypeMapping($typeName, $type);
        }

        return $this;
    }
}
