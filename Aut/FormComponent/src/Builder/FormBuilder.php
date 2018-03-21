<?php

namespace Aut\FormComponent\Builder;

use Form;

class FormBuilder
{
    private $stopOperationMessage = false;

    private $formType = 'default';

    private $dataMethod = 'post';

    private $placeholder = '';

    private $formGroup = true;

    private $dataUrl = '';

    private $hasLangs  = false;

    private $dataJson = '';

    private $ajax = false;

    private $langs;

    private $resetProperty = [
        'hasLangs'    => false,
        'formGroup'   => true,
        'dataJson'    => '',
        'placeholder' => '',
    ];

    /**
     * FormBuilder constructor.
     */
    public function __construct()
    {
        $this->formType             = config('form-component.formType');
        $this->langs                = \LaravelLocalization::getSupportedLocales();

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

    /**
     * function for reset property form component
     */
    private function resetProperty()
    {
        foreach ($this->resetProperty as $prop => $value)
        {
            $this->$prop = $value;
        }
    }

    /**
     * @param string $type
     * @param bool $ajax
     * @param string $dataMethod
     * @param string $dataUrl
     * @param bool $stopOperationMessage
     */
    function formSetting($type = 'default' , $ajax = false , $dataMethod = 'post', $dataUrl = '', $stopOperationMessage = false)
    {
        $this->formType             = $type;
        $this->ajax                 = $ajax;
        $this->stopOperationMessage = $stopOperationMessage;
        $this->dataMethod           = $dataMethod;
        $this->dataUrl              = $dataUrl;
    }

    /**
     * @param $type
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    private function _hidden($type, $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        echo removeSpaces(view("form-component::{$this->formType}.hidden", [
            'id'        => $id,
            'name'      => $name,
            'value'     => $value,
            'class'     => $class,
            'attr'      => $attr,
            'type'      => $type,
            'dataJson'  => $this->dataJson
        ])->render());

        $this->resetProperty();
    }

    /**
     * @param $type
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    private function _input($type, $label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        echo removeSpaces(view("form-component::{$this->formType}.input", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'value'       => $value,
            'class'       => $class,
            'attr'        => $attr,
            'type'        => $type,
            'dataJson'    => $this->dataJson,
            'hasLangs'    => $this->hasLangs,
            'langs'       => $this->langs,
            'formGroup'   => $this->formGroup,
            'placeholder' => $this->placeholder,
        ])->render());

        $this->resetProperty();
    }

    /**
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    function primarykey($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $this->_hidden('primarykey', $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    function hidden($id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $this->_hidden('hidden', $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    function text($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $this->_input('text', $label, $id, $name, $value, $class, $attr);
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     */
    function textarea($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        echo removeSpaces(view("form-component::{$this->formType}.textarea", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'value'       => $value,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->dataJson,
            'hasLangs'    => $this->hasLangs,
            'langs'       => $this->langs,
            'formGroup'   => $this->formGroup,
            'placeholder' => $this->placeholder,
        ])->render());

        $this->resetProperty();
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return string
     */
    function number($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        $this->_input('number', $label, $id, $name, $value, $class, $attr);
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
     * @return string
     */
    function autocomplete($label = '', $id = '', $name = '', $remote = '', $option = [], $letter = '3', $class = '', $attr = [])
    {
        echo removeSpaces(view("form-component::{$this->formType}.autocomplete", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'remote'      => $remote,
            'option'      => $option,
            'letter'      => $letter,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->dataJson,
            'formGroup'   => $this->formGroup,
            'placeholder' => $this->placeholder,
        ])->render());

        $this->resetProperty();
    }

    /**
     * @param string $label
     * @param string $id
     * @param string $name
     * @param array $option
     * @param null $selected
     * @param string $class
     * @param array $attr
     * @return string
     */
    function select($label = '', $id = '', $name = '', $option = [], $selected = null, $class = '', $attr = [])
    {
        echo removeSpaces(view("form-component::{$this->formType}.select", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'option'      => $option,
            'selected'    => $selected,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->dataJson,
            'formGroup'   => $this->formGroup,
            'placeholder' => $this->placeholder,
        ])->render());

        $this->resetProperty();
    }

    /**
     * @param string $icon
     * @param string $class
     * @param string $text
     * @param string $html
     * @return string
     */
    function notify($icon = '', $class = '', $text = '', $html = '')
    {
        echo removeSpaces(view("form-component::{$this->formType}.notify", [
            'icon'  => $icon,
            'class' => $class,
            'text'  => $text,
            'html'  => $html,
        ])->render());
    }

    /**
     * @param string $method
     * @param string|array $action
     * @param string $class
     * @param array $attr
     * @param array $option
     * @return \Illuminate\Support\HtmlString
     */
    function formOpen($id= '', $method = 'post', $action = '', $class = '', $attr = [], $option = [])
    {
        $action = is_array($action) ? $action : ['url' => $action ? $action : '#'];
        $attr   = $this->stopOperationMessage
            ? array_merge($attr, ['data-stop-operation-message' => $this->stopOperationMessage])
            : $attr;

        $option = array_merge([
            'id'          => $id,
            'method'      => $method,
            'class'       => $this->ajax ? "ajax-form $class" : $class,
            'data-method' => $this->dataMethod,
            'data-url'    => $this->dataUrl
        ],$action, $option, $attr, $option);

        echo Form::open($option);
    }

    /**
     * @return string
     */
    function formClose()
    {
        echo Form::close();
    }

    /**
     * @param array $option
     */
    function formAjaxButtons($option = [
        'successFunc'          => '',
        'addSuccessFunc'       => '',
        'updateSuccessFunc'    => '',
        'deleteSuccessFunc'    => '',
        'extraSerialize'       => '',
        'deleteSerialize'      => '',
        'stopOperationMessage' => '',
    ]) {

        $option = array_merge([
            'successFunc'          => '',
            'addSuccessFunc'       => '',
            'updateSuccessFunc'    => '',
            'deleteSuccessFunc'    => '',
            'extraSerialize'       => '',
            'deleteSerialize'      => '',
            'stopOperationMessage' => '',
        ],$option);

        echo removeSpaces(view("form-component::{$this->formType}.modal.submit-ajax-button",[
            'successFunc'          =>  $option['successFunc'],
            'addSuccessFunc'       =>  $option['addSuccessFunc'],
            'updateSuccessFunc'    =>  $option['updateSuccessFunc'],
            'deleteSuccessFunc'    =>  $option['deleteSuccessFunc'],
            'extraSerialize'       =>  $option['extraSerialize'],
            'deleteSerialize'      =>  $option['deleteSerialize'],
            'stopOperationMessage' =>  $option['stopOperationMessage'],
        ])->render());
    }

    /**
     * @param string $id
     * @param string $class
     * @param string $attr
     * @return string
     */
    function modalOpen($id = '',$class = '',$attr = '') {

        // turn on ajax
        $this->ajax = true;

        if($this->ajax)
            echo "<div class='ajaxCont'>";

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-open", [
            'id'    => $id,
            'class' => $class,
            'attr'  => $attr
        ])->render());
    }

    /**
     * @return string
     */
    function modalClose() {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-close")->render());

        if($this->ajax)
            echo '</div>';
    }

    /**
     * @param string $title
     * @return string
     */
    function modalHeaderOpen($title = '') {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-header-open", [
            'title' => $title,
        ])->render());
    }

    /**
     * @return string
     */
    function modalHeaderClose() {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-header-close")->render());
    }

    /**
     * @param string $title
     * @return string
     */
    function modalBodyOpen($class = '') {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-body-open", [
            'class' => $class,
        ])->render());
    }

    /**
     * @return string
     */
    function modalBodyClose() {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-body-close")->render());
    }

    /**
     * @param string $title
     * @return string
     */
    function modalFooterOpen() {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-footer-open")->render());
    }

    /**
     * @return string
     */
    function modalFooterClose() {

        echo removeSpaces(view("form-component::{$this->formType}.modal.modal-footer-close")->render());
    }

    /**
     * @param string|array $data
     */
    function fill($data = '')
    {
        $this->dataJson = is_array($data)
            ? collect($data)->toJson()
            : $data;

        return $this;
    }

    /**
     * @param array $langs
     * @return $this
     */
    function langs($langs = []) {

        $this->hasLangs = true;
        $this->langs    = shortIfElse(empty($langs),$this->langs,$langs);

        return $this;
    }

    /**
     * @param bool $has
     */
    function formGroup($has = true) {

        $this->formGroup = $has;

        return $this;
    }

    /**
     * @param string $id
     * @param string $html
     * @param string $class
     * @param array $attr
     */
    function addCont($id = '', $html = '', $class = '', $attr = []) {

        $attr = convertArrayToString($attr);

        echo "<div id='$id' class='$class' $attr>$html</div>";
    }

    /**
     * @param string $id
     * @param string $class
     * @param string $attr
     */
    function contStart($id = '', $class = '', $attr = '') {

        $attr = convertArrayToString($attr);

        echo "<div id='$id' class='$class' $attr>";
    }

    function contEnd() {

        echo "</div>";
    }

    function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}