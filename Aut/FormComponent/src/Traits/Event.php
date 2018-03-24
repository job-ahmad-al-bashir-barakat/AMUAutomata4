<?php

namespace Aut\FormComponent\Traits;

trait Event
{
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
}