<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int menu_id
 */
class MenuPage extends Model
{
    use SoftDeletes;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['menu_id', 'color', 'order', 'buildable_id', 'buildable_type', 'optional_id', 'image_id'];

    protected $appends = ['logo_path'];

    public function buildable()
    {
        return $this->morphTo();
    }

    public function scopePageMenu($query, $page = false)
    {
        if ($page) {
            list($buildableType, $buildableId, $optionalId) = explode('.', $page);
        } else {
            $route = request()->route();
            list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        }

        $query->whereBuildableType($buildableType);

        if ((clone $query)->whereBuildableId($buildableId)->count()) {
            $query->whereBuildableId($buildableId);
        }
        //Getting default content
        else {
            $query->whereNull('buildable_id');
        }

        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        }
        return $query;
    }

    public function scopeWhereOrNull($query, $column, $operation, $value = null)
    {
        $argc = count(func_get_args());
        if (3 === $argc) {
            $value = $operation;
            $operation = '=';
        }
        if (is_null($value)) {
            return $query->whereNull($column);
        }
        return $query->where($column, $operation, $value);
    }

    public function getLogoPathAttribute()
    {
        if ($this->logo) {
            $imageName = $this->logo->hash_name ?: '';
        } else {
            return '';
        }
        return self::IMAGE_PATH . "logo_images/" . $imageName;
    }

    public function logo()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function menu()
    {
        return $this->belongsTo(MenuList::class, 'menu_id');
    }

    public static function getColorOptions()
    {
        return [
            '1' => trans('app.red'),
            '2' => trans('app.orange'),
            '3' => trans('app.dark_red'),
            '4' => trans('app.yellow'),
            '5' => trans('app.darkest_red'),
            '6' => trans('app.blue'),
            '7' => trans('app.sky_blue'),
            '8' => trans('app.baby_blue'),
            '9' => trans('app.brown'),
            '10' => trans('app.light_green'),
            '11' => trans('app.dark_green'),
            '12' => trans('app.dark_blue'),
            '13' => trans('app.light_orange'),
            '14' => trans('app.purple'),
        ];
    }
}
