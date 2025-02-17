<?php

namespace App\Http\Resources\Setting;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResoures extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'About US'          => $this->about_us,
            'Counter1 Name'     => $this->counter1_name,
            'Counter1 Count'    => $this->counter1_count,
            'Counter2 Name'     => $this->counter2_name,
            'Counter2 Count'    => $this->counter2_count,
            'Counter3 Name'     => $this->counter3_name,
            'Counter3 Count'    => $this->counter3_count,
            'Counter4 Name'     => $this->counter4_name,
            'Counter4 Count'    => $this->counter4_count
        ];
    }
}
