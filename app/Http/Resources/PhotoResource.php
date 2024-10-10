<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'photo_id' => $this->photo_id,
            'image_url' => $this->image_url,
            'created_at' => $this->created_at,
            'caption' => $this->caption,
            'pet_id' => $this->pet_id,
        ];
    }
}
