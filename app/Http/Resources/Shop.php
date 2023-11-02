<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Shop extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'address' => $this->address,

            'map_popup_content' => "<b>Nazwa:</b> {$this->name}<br>"
                . (!empty($this->address) ? "<b>Adres:</b> {$this->address}<br>" : "")
                . (!empty($this->category) ? "<b>Kategoria:</b> {$this->category}<br>" : "")

        ];
    }
}
