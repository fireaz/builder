<?php

namespace FireAZ\Builder\Manager;


class TableManager extends CommonManager
{
    public static function Create($fields): self
    {
        return (new self())->Fields($fields);
    }
    public function Fields($fields): self
    {
        $this->fields = $fields;
        return $this;
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
