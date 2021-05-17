<?php


namespace Aleahy\LaravelBladeComponents\View\Components\Select;

class LabelledSelect extends \Illuminate\View\Component
{
    public string $label;

    public function __construct(string $label)
    {
        $this->label = $label;
    }
    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('lbc::select.labelled');
    }
}
