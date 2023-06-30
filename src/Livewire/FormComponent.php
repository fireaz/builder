<?php

namespace FireAZ\Builder\Livewire;

use FireAZ\Builder\Manager\FormManager;
use FireAZ\Reojs\Component;

class FormComponent extends Component
{
    public FormManager $form;
    public function mount($config)
    {
        $this->form = $config;
    }
    public function render()
    {
        return view_scope($this->form->getView());
    }
}
