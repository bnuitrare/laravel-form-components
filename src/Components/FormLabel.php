<?php

namespace ProtoneMedia\LaravelFormComponents\Components;

class FormLabel extends Component
{
    public string $label;
    public string $required = '';/** william */

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label = '',string $required = '')
    {
        $this->label    = $label;
        $this->required = $required;/** william */        
    }
}
