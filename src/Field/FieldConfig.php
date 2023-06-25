<?php

namespace FireAZ\Builder\Field;

use FireAZ\Builder\Traits\FieldDefault;
use Illuminate\Support\Traits\Macroable;

class FieldConfig
{
    use Macroable, FieldDefault;

    private $fieldType = 'Text';
    private $fieldLabel = 'Text';
    private $fieldTitle = 'Text';
    private $fieldName = 'Text';
    private $fieldFormat;
    public function __construct($name = '')
    {
        $this->fieldName = $name;
    }
    public function Format($format)
    {
        $this->fieldFormat = $format;
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
