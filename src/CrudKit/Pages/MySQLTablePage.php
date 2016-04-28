<?php
namespace CrudKit\Pages;

use CrudKit\Pages\BaseSQLDataPage;
use CrudKit\Data\Connection\MySQLConnection;
use Doctrine\DBAL\DriverManager;

class MySQLTablePage extends BaseSQLDataPage
{
    public function __construct($id, $user, $pass, $db, $extra = [])
    {
        $mySQLConnection = new MySQLConnection($user, $pass, $db, $extra);

        parent::__construct($id, $mySQLConnection);

        return $this;
    }
}
