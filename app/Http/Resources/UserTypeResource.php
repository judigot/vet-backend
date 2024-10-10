<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTypeResource extends JsonResource
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
            'type_name' => $this->type_name,
            'user_type_id' => $this->user_type_id,
            'users' => UserResource::collection($this->whenLoaded('user')),
        ];
    }
}
