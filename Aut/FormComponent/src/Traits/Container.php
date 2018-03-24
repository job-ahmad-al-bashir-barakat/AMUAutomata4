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

    /**
     * @return string
     */
    function formClose()
    {
        return Form::close();
    }
}