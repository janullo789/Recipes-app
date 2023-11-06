<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'category',
        'address',
        'latitude',
        'longitude',
    ];

    public function getCoordinateAttribute()
    {
        return $this->latitude && $this->longitude
            ? "{$this->latitude}, {$this->longitude}"
            : null;
    }

    public function getNameLinkAttribute()
    {
        $title = __('app.show_detail_title', [
            'name' => $this->name,
            'type' => __('shop.shop'),
        ]);

        return sprintf(
            '<a href="%s" title="%s">%s</a>',
            route('shops.show', $this),
            $title,
            $this->name
        );
    }

    public function getMapPopupContentAttribute()
    {
        return sprintf(
            '<div class="my-2"><strong>%s:</strong><br>%s</div><div class="my-2"><strong>%s:</strong><br>%s</div>',
            __('shop.name'),
            $this->name_link,
            __('shop.coordinate'),
            $this->coordinate
        );
    }

    /**
     * @param $query
     * @param $value
     * @return void
     */
    public function scopeSearch($query, $value)
    {
        $query->where('id', 'like', "%{$value}%")
            ->orWhere('name', 'like', "%{$value}%")
            ->orWhere('address', 'like', "%{$value}%");
    }
}
