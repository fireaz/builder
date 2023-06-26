<?php

namespace FireAZ\Builder\Field;

use FireAZ\Builder\Manager\CommonManager;
use FireAZ\Builder\Traits\FieldDefault;

class FieldManager extends CommonManager
{
    use FieldDefault;

    public function __construct($name = '')
    {
        $this->fieldName = $name;
        $this->Text();
    }
    public static function Create($name): self
    {
        return new self($name);
    }
    public function Format($format)
    {
        $this->fieldFormat = $format;
        return $this;
    }
    public function Rule($rule)
    {
        $this->fieldRule = $rule;
        return $this;
    }
    public function Title($title)
    {
        $this->fieldTitle = $title;
        return $this;
    }
    public function Label($label)
    {
        $this->fieldLabel = $label;
        return $this;
    }
    public function Layout($layout)
    {
        $this->fieldLayout = $layout;
        return $this;
    }
    public function getFieldType()
    {
        return $this->fieldType;
    }
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }
    public function getFieldTitle()
    {
        return $this->fieldTitle;
    }
    public function getFieldName()
    {
        return $this->fieldName;
    }
}
