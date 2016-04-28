<?php

namespace CrudKit\Pages;

use CrudKit\Pages\BaseSQLDataPage;
use CrudKit\Data\Connection\SQLServerConnection;
use Doctrine\DBAL\DriverManager;

class SQLServerTablePage extends BaseSQLDataPage
{
    public function __construct ($id, $user, $pass, $db, $extra = array())
    {
        $sqlServerConnection = new SQLServerConnection($user, $pass, $db, $extra);

        parent::__construct($id, $sqlServerConnection);

        return $this;
    }
}