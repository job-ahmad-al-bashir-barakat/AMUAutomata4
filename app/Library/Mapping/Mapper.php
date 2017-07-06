<?php
namespace App\Library\Mapping;

use Illuminate\Database\Eloquent\Collection;

abstract class Mapper
{
    public function mapCollection(Collection $items)
    {
        return $this->mapArray($items->toArray());
    }

    public function mapArray(Array $items)
    {
        return array_map([$this, 'mapper'], $items);
    }

    public abstract function mapper($item);
}