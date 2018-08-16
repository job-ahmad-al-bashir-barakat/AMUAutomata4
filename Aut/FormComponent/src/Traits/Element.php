<?php

namespace Aut\FormComponent\Traits;

trait Element
{
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
            'tagsinput'   => $this->property['tagsinput'],
            'hasLangs'    => $this->property['hasLangs'],
            'hasTrans'    => $this->property['hasTrans'],
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
    function hidden($id = '', $name = '', $value = null, $class = '', $attr = [], $permanent = false)
    {
        return $this->_hidden('hidden', $id, $name, $value, $class, $attr, $permanent);
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
    function password($label = '', $id = '', $name = '', $value = null, $class = '', $attr = [])
    {
        return $this->_input('password', $label, $id, $name, $value, $class, $attr);
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
            'hasTrans'    => $this->property['hasTrans'],
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
            'hasTrans'    => $this->property['hasTrans'],
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
     * @return null|string|string[]
     * @throws \Throwable
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
            'hasTrans'    => $this->property['hasTrans'],
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
     * @return null|string|string[]
     * @throws \Throwable
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
     * @param string $text
     * @param string $type
     * @param string $class
     * @param bool $dismiss
     * @return null|string|string[]
     * @throws \Throwable
     */
    function alert($text = '', $type = '', $class = '', $dismiss = false) {

        $output = removeSpaces(view("form-component::{$this->property['formType']}.alert", [
            'text'      => $text,
            'type'      => $type,
            'class'     => $class,
            'dismiss'   => $dismiss,
        ])->render());

        return $output;
    }

    /**
     * @param string $src
     * @param string $id
     * @param string $name
     * @param string $class
     * @param array $attr
     * @return null|string|string[]
     * @throws \Throwable
     */
    function image($src = '', $id = '', $name = '', $class = '', $attr = []) {

        $output = removeSpaces(view("form-component::{$this->property['formType']}.image", [
            'id'     => $id,
            'name'   => $name,
            'src'    => $src,
            'class'  => $class,
            'attr'   => $attr
        ])->render());

        return $output;
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
     * @param string $label
     * @param string $id
     * @param string $name
     * @param null $value
     * @param string $class
     * @param array $attr
     * @return null|string|string[]
     * @throws \Throwable
     */
    function labelArea($label = '', $id = '', $name = '', $value = null, $class = '', $attr = []) {

        $output = removeSpaces(view("form-component::{$this->property['formType']}.label_area", [
            'label'       => $label,
            'id'          => $id,
            'name'        => $name,
            'value'       => $value,
            'class'       => $class,
            'attr'        => $attr,
            'dataJson'    => $this->property['dataJson'],
            'hasLangs'    => $this->property['hasLangs'],
            'hasTrans'    => $this->property['hasTrans'],
            'langs'       => $this->property['langs'],
            'formGroup'   => $this->property['formGroup'],
        ])->render());

        $this->resetProperty();

        return $output;
    }

    /**
     * @return string
     */
    function contEnd() {

        return "</div>";
    }
}