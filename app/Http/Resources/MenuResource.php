<?php

namespace App\Http\Resources;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class MenuResource
 * @package App\Http\Resources
 * @mixin Menu
 */
class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
