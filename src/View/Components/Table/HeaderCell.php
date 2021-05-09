<?php

namespace Aleahy\LaravelBladeComponents\View\Components\Table;

class HeaderCell extends \Illuminate\View\Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('lbc::table.header-cell');
    }
}
