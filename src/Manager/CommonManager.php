<?php

namespace FireAZ\Builder\Manager;

use FireAZ\Reojs\ArrayWireable;
use Illuminate\Support\Traits\Macroable;

class CommonManager extends ArrayWireable
{
    use Macroable;
    public function getView()
    {
    }
    public function getFields()
    {
        return [];
    }
    public function getForm()
    {
        return FormManager::Create($this->getFields());
    }
    public function getTable()
    {
        return TableManager::Create($this->getFields());
    }
    public function toLivewire()
    {
        return $this->data ? $this->data->getData() : [];
    }

    public static function fromLivewire($value): self
    {
        return new self($value);
    }
}
