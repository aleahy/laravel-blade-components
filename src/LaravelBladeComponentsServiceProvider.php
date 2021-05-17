<?php

namespace Aleahy\LaravelBladeComponents;

use Aleahy\LaravelBladeComponents\View\Components\DataItem;
use Aleahy\LaravelBladeComponents\View\Components\Input\Search;
use Aleahy\LaravelBladeComponents\View\Components\Select\LabelledSelect;
use Aleahy\LaravelBladeComponents\View\Components\Table\Cell;
use Aleahy\LaravelBladeComponents\View\Components\Table\HeaderCell;
use Aleahy\LaravelBladeComponents\View\Components\Table\Table;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lbc');
        Blade::component('input.search', Search::class);
        Blade::component('data-item', DataItem::class);
        Blade::component('table', Table::class);
        Blade::component('table.header-cell', HeaderCell::class);
        Blade::component('table.cell', Cell::class);
        Blade::component('select.labelled', LabelledSelect::class);
    }
}
