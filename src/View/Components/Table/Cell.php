<?php


namespace Aleahy\LaravelBladeComponents\View\Components\Table;

class Cell extends \Illuminate\View\Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('lbc::table.cell');
    }
}
