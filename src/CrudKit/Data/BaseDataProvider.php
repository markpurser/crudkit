<?php

namespace CrudKit\Data;

abstract class BaseDataProvider {
    // Data modelling
    public abstract function getData ($params = array());
    public abstract function getSchema ();
    public abstract function getRowCount ();

    // Ordering
    public abstract function getSummaryColumns ();
    public abstract function getEditFormOrder ();

    // Individual values
    public abstract function getRow ($id = null);
    public abstract function setRow ($id = null, $values = array());

    // Editing Options
    public abstract function getEditFormConfig ();

    public function init () {

    }

    protected $page = null;

    public function setPage ($page) {
        $this->page = $page;
    }
    public function getRelationshipValues($foreign_key) {
        return array(
            'type' => 'json',
            'data' => array(
                'values' => array()
            )
        );
    }
}