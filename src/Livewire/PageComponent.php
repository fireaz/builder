<?php

namespace FireAZ\Builder\Livewire;

use FireAZ\Builder\Manager\PageManager;
use FireAZ\Reojs\Component;

class PageComponent extends Component
{
    public PageManager $page;
    public function mount($config)
    {
        $this->page = $config;
    }
}
