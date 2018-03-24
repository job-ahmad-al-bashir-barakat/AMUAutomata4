<?php

namespace Aut\FormComponent\Traits;

trait Container
{
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