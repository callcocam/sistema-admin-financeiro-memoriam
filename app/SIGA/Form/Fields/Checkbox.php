<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Form\Fields;


use SIGA\Form\BaseField;
use Illuminate\Support\Str;

class Checkbox extends BaseField
{


    protected $class = 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded';
    protected $placeholder;
    /**
     * Field constructor.
     * @param $label
     * @param $name
     */
    public function __construct($label, $name)
    {
        parent::__construct($label, $name);
        $this->type( 'checkbox');
        $this->view('checkbox');
        $this->class($this->class);

    }

    /**
     * @param $label
     * @param null $name
     * @return static
     */
    public static function make($label, $name = null)
    {
        return new static($label, $name);
    }

    
    /**
     * @param array $options
     * @return $this
     */
    public function checkboxs($options = [])
    {
        $this->attribute('type', 'checkbox');
        $this->view('checkboxes');
        $this->options($options);
        return $this;
    }

    public function placeholder($placeholder){
        $this->placeholder = $placeholder;
        return $this;
    }
}
