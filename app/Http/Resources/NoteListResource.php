<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'note_id' => $this->note_id,
            'company' => $this->company,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'created_at' => $this->created_at,
        ];
    }
}
