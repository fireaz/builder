<?php

namespace FireAZ\Builder\Traits;


trait FieldDefault
{
    public function Text()
    {
        $this->fieldType = 'Text';
        return $this;
    }
    public function Number()
    {
        $this->fieldType = 'Number';
        return $this;
    }
    public function DateTime()
    {
        $this->fieldType = 'DateTime';
        return $this;
    }
    public function Time()
    {
        $this->fieldType = 'Time';
        return $this;
    }
    public function Color()
    {
        $this->fieldType = 'Color';
        return $this;
    }
    public function Textarea()
    {
        $this->fieldType = 'Textarea';
        return $this;
    }
    public function Password()
    {
        $this->fieldType = 'Password';
        return $this;
    }
    public function Check()
    {
        $this->fieldType = 'Check';
        return $this;
    }
    public function Dropdown()
    {
        $this->fieldType = 'Dropdown';
        return $this;
    }
    public function Multiselect()
    {
        $this->fieldType = 'Multiselect';
        return $this;
    }
    public function Tag()
    {
        $this->fieldType = 'Tag';
        return $this;
    }
    public function File()
    {
        $this->fieldType = 'File';
        return $this;
    }
    public function Image()
    {
        $this->fieldType = 'Image';
        return $this;
    }
    public function TreeView()
    {
        $this->fieldType = 'TreeView';
        return $this;
    }
    public function Cron()
    {
        $this->fieldType = 'Cron';
        return $this;
    }
    public function MultiCron()
    {
        $this->fieldType = 'MultiCron';
        return $this;
    }
    public function Button()
    {
        $this->fieldType = 'Button';
        return $this;
    }
}
