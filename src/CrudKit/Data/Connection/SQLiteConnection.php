<?php

namespace CrudKit\Data\Connection;

use Doctrine\DBAL\DriverManager;

class SQLiteConnection extends BaseConnection
{
	public function __construct ($path)
    {
        $params = array(
            'driver' => 'pdo_sqlite',
            'path' => $path
        );

        $this->setConnection(DriverManager::getConnection($params));

        return $this;
	}
}