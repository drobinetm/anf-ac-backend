<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'name' => $this->{'name'},
            'email' => $this->{'email'},
            'lastLame' => $this->{'last_name'},
            'age' => $this->{'age'},
            'gender' => $this->{'gender'},
        ];
    }
}
