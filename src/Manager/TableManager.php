<?php

namespace FireAZ\Builder\Manager;


class TableManager extends CommonManager
{
    private $fields;
    public function __construct($fields = [])
    {
        $this->fields = $fields;
    }
    public static function Create($fields): self
    {
        return new self($fields);
    }
    public function getFields()
    {
        return  $this->fields;
    }
    public function getTable()
    {
        return $this;
    }
    public function getView()
    {
        return "builder::manager.table";
    }
}
