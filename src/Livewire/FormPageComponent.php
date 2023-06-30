<?php

namespace FireAZ\Builder\Livewire;

use FireAZ\Builder\Manager\PageManager;
use FireAZ\Reojs\Component;

class FormPageComponent extends Component
{
    public PageManager $page;
    public function mount($config)
    {
        $this->page = app($config);
    }
    public function render()
    {
        return view_scope($this->page->getView());
    }
}
