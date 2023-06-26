<?php

namespace FireAZ\Builder\Manager;


class PageManager extends CommonManager
{
    public function __construct()
    {
    }
    public function getFields()
    {
        return [];
    }
    public function getView()
    {
        return "builder::manager.form";
    }
}
