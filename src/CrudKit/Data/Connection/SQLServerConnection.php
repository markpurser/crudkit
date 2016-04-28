<?php

namespace CrudKit\Data\Connection;

use Doctrine\DBAL\DriverManager;

class SQLServerConnection extends BaseConnection
{
    public function __construct ($user, $pass, $db, $extra = array())
    {
        $params = array(
            'driver' => 'sqlsrv',
            'user' => $user,
            'password' => $pass,
            'dbname' => $db
        );

        if(isset($extra['host'])) {
            $params['host'] = $extra['host'];
        }
        if(isset($extra['port'])) {
            $params['port'] = $extra['port'];
        }
        if(isset($extra['charset'])) {
            $params['charset'] = $extra['charset'];
        }

        $this->setConnection(DriverManager::getConnection($params));

        return $this;
    }
}