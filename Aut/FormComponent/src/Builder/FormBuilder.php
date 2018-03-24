<?php

namespace Aut\FormComponent\Builder;

use Form;

class FormBuilder
{
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
     */
    public function __call($type, $arguments)
    {
        $this->defaultMethodCall($type, $arguments);
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
     */
    private function defaultMethodCall($type, $arguments)
    {
        $label = isset($arguments[0]) ? $arguments[0] : '';
        $id    = isset($arguments[1]) ? $arguments[1] : '';
        $name  = isset($arguments[2]) ? $arguments[2] : '';
        $value = isset($arguments[3]) ? $arguments[3] : null;
        $class = isset($arguments[4]) ? $arguments[4] : '';
        $attr  = isset($arguments[5]) ? $arguments[5] : [];

        $this->_input($type, $label, $id, $name, $value, $class, $attr);
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

    /**
     * @param string $event (form,res)
     * @return $this
     */
    function onGetDataSuccess($event = '')
    {
        $this->event['getDataSuccessFunc'] = $event;

        return $this;
    }

    /**
     * @param $type
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    private function _hidden($type, $id = '', $name = '', $value = null, $class = '', $attr = [] ,$permanent = false)
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.hidden", [
            'id'        => $id,
            'name'      => $name,
            'value'     => $value,
            'class'     => $class,
            'attr'      => $attr,
            'type'      => $type,
            'dataJson'  => $this->property['dataJson'],
            'permanent' => $permanent,
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @param $type
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    private function _input($type, $label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.input", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'value'       => $value,
            'class'       => $class,
            'attr'        => $attr,
            'type'        => $type,
            'dataJson'    => $this->property['dataJson'],
            'hasLangs'    => $this->property['hasLangs'],
            'langs'       => $this->property['langs'],
            'formGroup'   => $this->property['formGroup'],
            'placeholder' => $this->property['placeholder'],
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function primarykey($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return $this->_hidden('primarykey', $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function hidden($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return $this->_hidden('hidden', $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function text($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return $this->_input('text', $label, $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function textarea($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.textarea", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'value'       => $value,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->property['dataJson'],
            'hasLangs'    => $this->property['hasLangs'],
            'langs'       => $this->property['langs'],
            'formGroup'   => $this->property['formGroup'],
            'placeholder' => $this->property['placeholder'],
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function number($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return $this->_input('number', $label, $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param string $remote
     * @param array $option
     * @param string $letter
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function autocomplete($label = '', $id = '', $name = '', $remote = '', $option = [], $letter = '3', $class = '', $attr = [])
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.autocomplete", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'remote'      => $remote,
            'option'      => $option,
            'letter'      => $letter,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->property['dataJson'],
            'hasLangs'    => $this->property['hasLangs'],
            'langs'       => $this->property['langs'],
            'formGroup'   => $this->property['formGroup'],
            'placeholder' => $this->property['placeholder'],
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param array $option
     * @param null $selected
     * @param string $class
     * @param array $attr
     * @return mixed
     */
    function select($label = '', $id = '', $name = '', $option = [], $selected = null, $class = '', $attr = [])
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.select", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'option'      => $option,
            'selected'    => $selected,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->property['dataJson'],
            'hasLangs'    => $this->property['hasLangs'],
            'langs'       => $this->property['langs'],
            'formGroup'   => $this->property['formGroup'],
            'placeholder' => $this->property['placeholder'],
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @param string $icon
     * @param string $class
     * @param string $text
     * @param string $html
     * @return mixed
     */
    function notify($icon = '', $class = '', $text = '', $html = '')
    {
        $output = removeSpaces(view("form-component::{$this->property['formType']}.notify", [
            'icon'  => $icon,
            'class' => $class,
            'text'  => $text,
            'html'  => $html,
        ])->render());

        return $output;
    }

    /**
     * @param string $id
     * @param string $method
     * @param string $action
     * @param string $class
     * @param array $attr
     * @param array $option
     * @return \Illuminate\Support\HtmlString
     */
    function formOpen($id= '', $method = 'get', $action = '', $class = '', $attr = [])
    {
        $action = is_array($action) ? $action : ['url' => $action ? $action : '#'];

        // add stopOperationMessage
        $attr = $this->property['stopOperationMessage']
            ? array_merge($attr, ['data-stop-operation-message' => $this->property['stopOperationMessage']])
            : $attr;

        // add getDataSuccessFunc
        $attr = empty($this->event['getDataSuccessFunc'])
            ? $attr
            : array_merge($attr, ['data-get-success' => $this->event['getDataSuccessFunc']]);

        // add successFunc
        $attr = empty($this->event['successFunc'])
            ? $attr
            : array_merge($attr, ['data-ajax-form-success' => $this->event['successFunc']]);

        // add extraSerialize
        $attr = empty($this->property['extraSerialize'])
            ? $attr
            : array_merge($attr, ['data-extra-serialize' => $this->property['extraSerialize']]);

        // add extraSerialize
        $attr = $this->property['takeAction']
            ? array_merge($attr, ['data-take-action' => $this->property['takeAction']])
            : $attr;

        $option = array_merge([
            'id'          => $id,
            'method'      => $method,
            'class'       => $this->property['ajax'] ? "ajax-form $class" : $class,
            'data-method' => $this->property['dataMethod'],
            'data-target' => $this->property['dataTarget']
        ],$action, $attr);

        return Form::open($option);
    }

    function takeAction($bool = true)
    {
        $this->property['takeAction'] = $bool;

        return $this;
    }

    /**
     * @return string
     */
    function formClose()
    {
        return Form::close();
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
     * @param string $event (form,res)
     * @return $this
     */
    function onSuccess($event = '')
    {
        $this->event['successFunc'] = $event;

        return $this;
    }

    /**
     * @param string $event (form,res)
     * @return $this
     */
    function onAddSuccess($event = '')
    {
        $this->event['addSuccessFunc'] = $event;

        return $this;
    }

    /**
     * @param string $event (form,res)
     * @return $this
     */
    function onUpdateSuccess($event = '')
    {
        $this->event['updateSuccessFunc'] = $event;

        return $this;
    }

    /**
     * @param string $event (form,res)
     * @return $this
     */
    function onDeleteSuccess($event = '')
    {
        $this->event['deleteSuccessFunc'] = $event;

        return $this;
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