<?php

namespace FireAZ\Builder\Manager;


class FormManager extends CommonManager
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
    public $isEdit = false;
    public function Rules()
    {
        return [];
    }
    public function getForm()
    {
        return $this;
    }
    public function getFields()
    {
        return $this->fields;
    }
    public function getView()
    {
        return "builder::manager.form";
    }
}
