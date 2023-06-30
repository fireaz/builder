<?php

namespace FireAZ\Builder\Manager;

use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

class PageManager extends CommonManager
{
    public function getFields()
    {
        return [];
    }
    public function getView()
    {
        return "builder::manager.page.index";
    }
    public static function Route($url, $name)
    {
        Route::get($url, function () {
            $route = Route::current();
            $class = Livewire::getClass('builder::table-page');
            if (!$class) return abort(404);
            $route->setAction(array_merge($route->getAction(), RouteAction::parse($route->uri(), ['uses' => $class])));
            $route->setParameter('config', self::class);
            return $route->run();
        })->name($name);
    }
}
