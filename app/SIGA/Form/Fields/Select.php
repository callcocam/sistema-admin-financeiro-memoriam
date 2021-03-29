<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Form\Fields;


use Illuminate\Database\Eloquent\Builder;
use SIGA\Form\BaseField;

class Select extends BaseField
{

    protected $class = 'form-control';

    /**
     * Field constructor.
     * @param $label
     * @param $name
     */
    public function __construct($label, $name)
    {
        parent::__construct($label, $name);
        $this->attribute('name', $this->name);
        $this->view('select-dropdown');
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
     * @return $this
     */
    public function multiple()
    {
        $this->attribute('multiple', true);
        return $this;
    }

    /**
     * @return $this
     */
    public function dropdown()
    {
        $this->view('select-dropdown');
        return $this;
    }

    /**
     * @return $this
     */
    public function inline()
    {
        $this->view('select-inline');
        return $this;
    }

    public function target($query, $where = null, $label = "name", $key = "id")
    {
        if (is_string($query)) {
            $query = app($query);
        }
        if ($where) {
            if(is_array($label)){
                foreach ($label as $value){
                    $query->orWhere($value, 'like', '%' . $where . '%');
                }
                $label = $label[0];
            }
            else{
                $query->where($label, 'like', '%' . $where . '%');
            }
        }
        else{
            if(is_array($label)){
                $label = $label[0];
            }
        }
        $this->options($query->pluck($key, $label)->toArray());

        return $this;
    }
}
