<?php
namespace CrudKit\Data\Connection;

abstract class BaseConnection
{
    /**
     * @var Connection
     */
    protected $conn;

    public function setConnection ($conn) {
        $this->conn = $conn;
        return $this;
    }

    public function getConnection () {
        return $this->conn;
    }
}
