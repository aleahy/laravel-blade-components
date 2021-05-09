<?php

namespace Aleahy\LaravelBladeComponents\View\Components\Table;

class Table extends \Illuminate\View\Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('lbc::table.table');
    }
}
