<?php

namespace Aut\FormComponent\Builder;

use Aut\FormComponent\Traits\Container;
use Aut\FormComponent\Traits\Element;
use Form;
use Aut\FormComponent\Traits\Event;

class FormBuilder
{
    use Event, Element, Container;

    private $loader = 'data-form-loader';

    private $property = [
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
        'ajax'                       => false,
        'autoAjaxCont'               => true,
        'dataMethod'                 => 'get',
        'formType'                   => 'default',
        'placeholder'                => '',
        'dataTarget'                 => '',
        'dataJson'                   => '',
        'langs'                      => [],
        'takeAction'                 => false,
    ];

    private $resetProperty = [
        'hasLangs'    => false,
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

        view()->share([
            'supportMultipleLangs' => config('form-component.supportMultipleLangs')
        ]);
    }

    /**
     * @param $type
     * @param $arguments
     * @return mixed
     */
    public function __call($type, $arguments)
    {
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
        $this->property['formType']   = $type;
        $this->property['ajax']       = $ajax;
        $this->property['dataMethod'] = $dataMethod;
        $this->property['dataTarget'] = $dataTarget;

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
     * @param string $dataMethod
     * @param string $dataTarget
     * @return $this
     */
    function getData($dataMethod = 'get', $dataTarget = '')
    {
        $this->property['dataMethod'] = $dataMethod;
        $this->property['dataTarget'] = $dataTarget;

        return $this;
    }

    function takeAction($bool = true)
    {
        $this->property['takeAction'] = $bool;

        return $this;
    }


    /**
     * @return string
     */
    function ajaxContOpen()
    {
        $this->property['autoAjaxCont'] = false;

        return "<div class='ajaxCont'>";
    }

    /**
     * @return string
     */
    function ajaxContClose()
    {
        return "</div>";
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
     * @param array $option
     * @return mixed
     */
    function formAjaxButtons($option = [
        'addSerialize'         => true,
        'updateSerialize'      => true,
        'deleteSerialize'      => true,
    ]) {

        $option = array_merge([
            'addSerialize'         => true,
            'updateSerialize'      => true,
            'deleteSerialize'      => true,
        ],$option);

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.submit-ajax-button",[

            'addSuccessFunc'             => $this->event['addSuccessFunc'],
            'updateSuccessFunc'          => $this->event['updateSuccessFunc'],
            'deleteSuccessFunc'          => $this->event['deleteSuccessFunc'],

            'addSerialize'               => $option['addSerialize'],
            'updateSerialize'            => $option['updateSerialize'],
            'deleteSerialize'            => $option['deleteSerialize'],

            'extraSerializeAdd'          => $this->property['extraSerializeAdd'],
            'extraSerializeUpdate'       => $this->property['extraSerializeUpdate'],
            'extraSerializeDelete'       => $this->property['extraSerializeDelete'],

            'stopAddOperationMessage'    => $this->property['stopAddOperationMessage'],
            'stopUpdateOperationMessage' => $this->property['stopUpdateOperationMessage'],
            'stopDeleteOperationMessage' => $this->property['stopDeleteOperationMessage'],
        ])->render());
    }


    /**
     * @param string $id
     * @param string $class
     * @param string $attr
     * @return string
     */
    function modalOpen($id = '', $class = '', $attr = '') {

        // turn on ajax
        $this->property['ajax'] = true;

        if($this->property['autoAjaxCont'] && $this->property['ajax'])
            $output = "<div class='ajaxCont'>";

        $output .= removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-open", [
            'id'    => $id,
            'class' => $class,
            'attr'  => $attr
        ])->render());

        return $output;
    }

    /**
     * @return mixed|string
     */
    function modalClose() {

        $output = removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-close")->render());

        if($this->property['autoAjaxCont'] && $this->property['ajax'])
            $output .= '</div>';

        return $output;
    }

    /**
     * @param string $title
     * @return mixed
     */
    function modalHeaderOpen($title = '') {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-header-open", [
            'title' => $title,
        ])->render());
    }

    /**
     * @return mixed
     */
    function modalHeaderClose() {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-header-close")->render());
    }

    /**
     * @param string $class
     * @return mixed
     */
    function modalBodyOpen($class = '') {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-body-open", [
            'class' => $class,
        ])->render());
    }

    /**
     * @return mixed
     */
    function modalBodyClose() {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-body-close")->render());
    }

    /**
     * @return mixed
     */
    function modalFooterOpen() {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-footer-open")->render());
    }

    /**
     * @return mixed
     */
    function modalFooterClose() {

        return removeSpaces(view("form-component::{$this->property['formType']}.modal.modal-footer-close")->render());
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
    function formGroup($has = true) {

        $this->property['formGroup'] = $has;

        return $this;
    }

    /**
     * @param string $id
     * @param string $html
     * @param string $class
     * @param array $attr
     * @return string
     */
    function addCont($id = '', $html = '', $class = '', $attr = []) {

        $attr = convertArrayToString($attr);

        return "<div id='$id' class='$class' $attr>$html</div>";
    }

    /**
     * @param string $id
     * @param string $class
     * @param string $attr
     * @return string
     */
    function contStart($id = '', $class = '', $attr = '') {

        $attr = convertArrayToString($attr);

        return "<div id='$id' class='$class' $attr>";
    }

    /**
     * @return string
     */
    function contEnd() {

        return "</div>";
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

    // fill form
    // arrange code with trits
}