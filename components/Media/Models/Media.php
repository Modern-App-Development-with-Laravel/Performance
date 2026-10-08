<?php

namespace Italofantone\Media\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    protected $fillable = [
        'thumbnail_path',
    ];

    protected function url(): Attribute
    {
        return new Attribute(
            get: fn () => $this->thumbnail_path
                ? Storage::disk('public')->url($this->thumbnail_path)
                : Storage::disk('public')->url($this->original_path),
        );
    }
}
