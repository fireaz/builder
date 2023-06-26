<?php

namespace FireAZ\Builder\Livewire;

use FireAZ\Builder\Manager\TableManager;
use FireAZ\Reojs\Component;

class TableComponent extends Component
{
    public TableManager $table;
    public function mount($config)
    {
        $this->table = $config;
    }
}
