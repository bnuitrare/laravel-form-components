<?php

namespace ProtoneMedia\LaravelFormComponents\Components;

class FormInput extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    public string $name;
    public string $label;

    public string $type;
    public bool $floating;
    public string $required;/** william */    
    public bool $dark;/** william */    

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'text',        
        string $required = '',/** william */        
        bool $dark = false,/** william */        
        $bind = null,
        $default = null,
        $language = null,
        bool $showErrors = true,
        bool $floating = false
    ) {
        $this->name       = $name;
        $this->label      = $label;
        $this->type       = $type;
        $this->required   = $required;
        $this->dark   = $dark;
        $this->showErrors = $showErrors;
        $this->floating   = $floating && $type !== 'hidden';

        if ($language) {
            $this->name = "{$name}[{$language}]";
        }

        $this->setValue($name, $bind, $default, $language);
    }
}
