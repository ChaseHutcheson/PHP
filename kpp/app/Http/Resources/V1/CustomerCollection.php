<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */

    public static $wrap = null;

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}

// https://youtu.be/YGqCZjdgJJk?si=5rKnSB2pNK1iB5QL 33:09