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
