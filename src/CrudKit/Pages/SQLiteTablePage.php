<?php

namespace CrudKit\Pages;

use CrudKit\Pages\BaseSQLDataPage;
use CrudKit\Data\Connection\SQLiteConnection;
use Doctrine\DBAL\DriverManager;

class SQLiteTablePage extends BaseSQLDataPage
{
	public function __construct ($id, $path)
    {
        $sqLiteConnection = new SQLiteConnection($path);

        parent::__construct($id, $sqLiteConnection);

        return $this;
	}
}