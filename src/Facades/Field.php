<?php

namespace FireAZ\Builder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 
 *
 * @see \FireAZ\Builder\Field\FieldManager
 */
class Field extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FireAZ\Builder\Menu\MenuManager::class;
    }
}
