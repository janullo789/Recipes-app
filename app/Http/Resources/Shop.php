<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Shop extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'address' => $this->address,

            'map_popup_content' => "<b>Nazwa:</b> $this->name<br>"
                . (!empty($this->address) ? "<b>Adres:</b> $this->address<br>" : "")
                . (!empty($this->category) ? "<b>Kategoria:</b> $this->category<br>" : "")

        ];
    }
}
