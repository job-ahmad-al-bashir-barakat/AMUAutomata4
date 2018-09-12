<?php

namespace Aut\FormComponent\Traits;

use Form;

trait Container
{
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
     * @param $model
     * @return $this
     */
    function model($model)
    {
        $this->property['model'] = $model;

        return $this;
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
    function formOpen($id= '', $method = 'post', $action = '', $class = '', $attr = [])
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

        $attr = $this->property['dataEditableTarget']
            ? array_merge($attr, ['data-editable-target' => $this->property['dataEditableTarget']])
            : $attr;

        $option = array_merge([
            'id'                   => $id,
            'method'               => $method,
            'class'                => $this->property['ajax'] ? "ajax-form $class" : $class,
            'data-method'          => $this->property['dataMethod'],
        ],$action, $attr);

        return $this->property['model'] ? Form::model($this->property['model'], $option) : Form::open($option);
    }

    /**
     * @return string
     */
    function formClose()
    {
        return Form::close();
    }

    function formGroupOpen($class = '', $attr = '') {

        return removeSpaces(view("form-component::{$this->property['formType']}.form.form-group-open",[
            'class' => $class,
            'attr'  => $attr
        ])->render());
    }

    function formGroupClose() {

        return removeSpaces(view("form-component::{$this->property['formType']}.form.form-group-close")->render());
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
}