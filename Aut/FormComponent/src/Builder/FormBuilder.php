<?php

namespace Aut\FormComponent\Builder;

use Aut\FormComponent\Traits\Container;
use Aut\FormComponent\Traits\Element;
use Aut\FormComponent\Traits\Event;

class FormBuilder
{
    use Event, Element, Container;

    protected $map = [
        'datetime' => 'datetime-local',
    ];

    private $loader = 'data-form-loader';

    private $property = [
        'model'                      => false,
        'formGroup'                  => true,
        'stopOperationMessage'       => false,
        'stopAddOperationMessage'    => false,
        'stopUpdateOperationMessage' => false,
        'stopDeleteOperationMessage' => false,
        'extraSerialize'             => '',
        'extraSerializeAdd'          => '',
        'extraSerializeUpdate'       => '',
        'extraSerializeDelete'       => '',
        'hasLangs'                   => false,
        'hasTrans'                   => false,
        'ajax'                       => false,
        'tagsinput'                  => false,
        'autoAjaxCont'               => true,
        'dataMethod'                 => 'get',
        'formType'                   => 'default',
        'placeholder'                => '',
        'dataEditableTarget'         => '',
        'dataJson'                   => '',
        'langs'                      => [],
        'takeAction'                 => false,
    ];

    private $propertyKeep = [
        'formGroup'   => false,
    ];

    private $resetProperty = [
        'hasLangs'    => false,
        'hasTrans'    => false,
        'tagsinput'   => false,
        'formGroup'   => true,
        'dataJson'    => '',
        'placeholder' => '',
    ];

    private $event = [
        'successFunc'        => '',
        'addSuccessFunc'     => '',
        'updateSuccessFunc'  => '',
        'deleteSuccessFunc'  => '',
        'getDataSuccessFunc' => '',
    ];

    /**
     * FormBuilder constructor.
     */
    public function __construct()
    {
        $this->property['formType'] = config('form-component.formType');
        $this->property['langs']    = \LaravelLocalization::getSupportedLocales();
    }

    /**
     * @param $type
     * @param $arguments
     * @return mixed
     */
    public function __call($type, $arguments)
    {
        $type = $this->map[$type]??$type;
        return $this->defaultMethodCall($type, $arguments);
    }

    /**
     * @return string
     */
    public function loader()
    {
        return $this->loader;
    }

    /**
     * @param $type
     * @param $arguments
     * @return mixed
     */
    private function defaultMethodCall($type, $arguments)
    {
        $label = isset($arguments[0]) ? $arguments[0] : '';
        $id    = isset($arguments[1]) ? $arguments[1] : '';
        $name  = isset($arguments[2]) ? $arguments[2] : '';
        $value = isset($arguments[3]) ? $arguments[3] : null;
        $class = isset($arguments[4]) ? $arguments[4] : '';
        $attr  = isset($arguments[5]) ? $arguments[5] : [];

        return $this->_input($type, $label, $id, $name, $value, $class, $attr);
    }

    private function resetProperty()
    {
        foreach ($this->resetProperty as $prop => $value)
        {
            if(isset($this->propertyKeep[$prop]) && !$this->propertyKeep[$prop])
                $this->property[$prop] = $value;
        }
    }

    /**
     * @param string $type
     * @param bool $ajax
     * @param string $dataMethod
     * @param string $dataTarget
     * @return $this
     */
    function formSetting($type = 'default' , $ajax = false , $dataMethod = 'get', $dataTarget = '')
    {
        $this->property['formType']           = $type;
        $this->property['ajax']               = $ajax;
        $this->property['dataMethod']         = $dataMethod;
        $this->property['dataEditableTarget'] = $dataTarget;

        return $this;
    }

    /**
     * @param string $dataMethod
     * @param string $dataTarget
     * @return $this
     */
    function getData($dataMethod = 'get', $dataEditableTarget = '')
    {
        $this->property['dataMethod']         = $dataMethod;
        $this->property['dataEditableTarget'] = $dataEditableTarget;

        return $this;
    }

    /**
     * @param bool $bool
     * @return $this
     */
    function takeAction($bool = true)
    {
        $this->property['takeAction'] = $bool;

        return $this;
    }

    /**
     * @param bool $ajax
     * @return $this
     */
    function setAjax($ajax = true)
    {
        $this->property['ajax'] = $ajax;

        return $this;
    }

    /**
     * @param string $type
     * @return $this
     */
    function setFormType($type = 'default')
    {
        $this->property['formType'] = $type;

        return $this;
    }

    /**
     * @param bool $all
     * @param bool $add
     * @param bool $update
     * @param bool $delete
     * @return $this
     */
    function setStopOperationMessage($all = true, $add = false, $update = false, $delete = false)
    {
        $this->property['stopOperationMessage']       = $all;
        $this->property['stopAddOperationMessage']    = $add;
        $this->property['stopUpdateOperationMessage'] = $update;
        $this->property['stopDeleteOperationMessage'] = $delete;

        return $this;
    }

    /**
     * @param string $all
     * @param string $add
     * @param string $update
     * @param string $delete
     * @return $this
     */
    function setExtraSerialize($all = '', $add = '', $update = '', $delete = '')
    {
        $this->property['extraSerialize']       = $all;
        $this->property['extraSerializeAdd']    = $add;
        $this->property['extraSerializeUpdate'] = $update;
        $this->property['extraSerializeDelete'] = $delete;

        return $this;
    }

    /**
     * @param string $data
     * @return $this
     */
    function fill($data = '')
    {
        $this->property['dataJson'] = is_array($data)
            ? collect($data)->toJson()
            : $data;

        return $this;
    }

    /**
     * @param array $langs
     * @return $this
     */
    function langs($langs = []) {

        $this->property['hasLangs'] = true;
        $this->property['langs']    = shortIfElse(empty($langs),$this->property['langs'],$langs);

        return $this;
    }

    /**
     * @param bool $has
     * @return $this
     */
    function trans($has = true) {

        $this->property['hasTrans'] = $has;

        return $this;
    }

    /**
     * @return $this
     */
    function formGroup($has = true, $keep = false) {

        $this->property['formGroup']     = $has;
        $this->propertyKeep['formGroup'] = $keep;

        return $this;
    }

    /**
     * @param $placeholder
     * @return $this
     */
    function placeholder($placeholder)
    {
        $this->property['placeholder'] = $placeholder;

        return $this;
    }

    function tagInput($tag = true)
    {
        $this->property['tagsinput'] = $tag;

        return $this;
    }

    function getMap()
    {
        return $this->map;
    }
}